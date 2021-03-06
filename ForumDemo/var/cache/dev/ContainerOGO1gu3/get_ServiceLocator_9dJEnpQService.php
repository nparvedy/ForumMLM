<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.9dJEnpQ' shared service.

return $this->privates['.service_locator.9dJEnpQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'repo_sub' => ['privates', 'App\\Repository\\SubsectionRepository', 'getSubsectionRepositoryService.php', true],
    'user_repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'manager' => '?',
    'repo_sub' => 'App\\Repository\\SubsectionRepository',
    'user_repo' => 'App\\Repository\\UserRepository',
]);
