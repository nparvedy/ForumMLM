<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.s3L2mVT' shared service.

return $this->privates['.service_locator.s3L2mVT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'subsection_repo' => ['privates', 'App\\Repository\\SubsectionRepository', 'getSubsectionRepositoryService.php', true],
    'user_repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'subsection_repo' => 'App\\Repository\\SubsectionRepository',
    'user_repo' => 'App\\Repository\\UserRepository',
]);
