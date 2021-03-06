<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.xqo6pO4' shared service.

return $this->privates['.service_locator.xqo6pO4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
    'repo' => ['privates', 'App\\Repository\\SubsectionRepository', 'getSubsectionRepositoryService.php', true],
    'repo_article' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService.php', true],
], [
    'paginator' => '?',
    'repo' => 'App\\Repository\\SubsectionRepository',
    'repo_article' => 'App\\Repository\\ArticleRepository',
]);
