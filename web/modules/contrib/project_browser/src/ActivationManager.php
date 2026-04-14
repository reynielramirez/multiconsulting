<?php

declare(strict_types=1);

namespace Drupal\project_browser;

use Drupal\project_browser\Activator\ActivationStatus;
use Drupal\project_browser\Activator\ActivatorInterface;
use Drupal\project_browser\ProjectBrowser\Project;

/**
 * A generalized activator that can handle any type of project.
 *
 * This is a service collector that tries to delegate to the first registered
 * activator that says it supports a given project.
 *
 * @internal
 *   This is an internal part of Project Browser and may be changed or removed
 *   at any time. It should not be used by external code.
 */
final class ActivationManager {

  /**
   * The registered activators.
   *
   * @var array<int, array{\Drupal\project_browser\Activator\ActivatorInterface, int}>
   */
  private array $activators = [];

  /**
   * Registers an activator.
   *
   * @param \Drupal\project_browser\Activator\ActivatorInterface $activator
   *   The activator to register.
   * @param int $priority
   *   (optional) The activator's priority. Higher numbers run first. Defaults
   *   to 0.
   */
  public function addActivator(ActivatorInterface $activator, int $priority = 0): void {
    if (in_array($activator, array_column($this->activators, 0), TRUE)) {
      return;
    }
    $this->activators[] = [$activator, $priority];
  }

  /**
   * Determines if a particular project is activated on the current site.
   *
   * @param \Drupal\project_browser\ProjectBrowser\Project $project
   *   A project to check.
   *
   * @return \Drupal\project_browser\Activator\ActivationStatus
   *   The state of the project on the current site.
   */
  public function getStatus(Project $project): ActivationStatus {
    return $this->getActivatorForProject($project)->getStatus($project);
  }

  /**
   * Returns the registered activator to handle a given project.
   *
   * @param \Drupal\project_browser\ProjectBrowser\Project $project
   *   A project object.
   *
   * @return \Drupal\project_browser\Activator\ActivatorInterface
   *   The activator which can handle the given project.
   *
   * @throws \InvalidArgumentException
   *   Thrown if none of the registered activators can handle the given project.
   */
  public function getActivatorForProject(Project $project): ActivatorInterface {
    // Sort the activators in reverse order (higher numbers first).
    usort($this->activators, fn ($a, $b) => $b[1] <=> $a[1]);

    foreach ($this->activators as [$activator]) {
      if ($activator->supports($project)) {
        return $activator;
      }
    }
    throw new \InvalidArgumentException("The project '$project->machineName' is not supported by any registered activators.");
  }

  /**
   * Activates projects on the current site.
   *
   * @param \Drupal\project_browser\ProjectBrowser\Project ...$projects
   *   The projects to activate.
   *
   * @return \Drupal\Core\Ajax\CommandInterface[]
   *   The AJAX commands returned by the activators for the given projects.
   */
  public function activate(Project ...$projects): array {
    // Group the projects according to which activator will handle them.
    $map = new \SplObjectStorage();
    foreach ($projects as $project) {
      $activator = $this->getActivatorForProject($project);
      $list = $map[$activator] ?? [];
      $list[] = $project;
      $map[$activator] = $list;
    }

    $commands = [];
    foreach ($map as $activator) {
      assert($activator instanceof ActivatorInterface);

      // If the activate() method's first parameter is variadic, the activator
      // will handle all its projects at once.
      $reflector = new \ReflectionMethod($activator, 'activate');
      $parameters = $reflector->getParameters();

      $list = $map->getInfo();
      if ($parameters[0]->isVariadic()) {
        $commands = array_merge($commands, $activator->activate(...$list) ?? []);
      }
      else {
        foreach ($list as $project) {
          $commands = array_merge($commands, $activator->activate($project) ?? []);
        }
      }
    }
    return $commands;
  }

}
