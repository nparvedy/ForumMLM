<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.q2ALYSS' shared service.

return $this->privates['.service_locator.q2ALYSS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
    'repo' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService.php', true],
    'repo_comment' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService.php', true],
    'repo_sub' => ['privates', 'App\\Repository\\SubsectionRepository', 'getSubsectionRepositoryService.php', true],
    'user_repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'paginator' => '?',
    'repo' => 'App\\Repository\\ArticleRepository',
    'repo_comment' => 'App\\Repository\\CommentRepository',
    'repo_sub' => 'App\\Repository\\SubsectionRepository',
    'user_repo' => 'App\\Repository\\UserRepository',
]);
