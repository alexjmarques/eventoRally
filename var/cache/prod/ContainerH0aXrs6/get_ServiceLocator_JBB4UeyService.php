<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.JBB4Uey' shared service.

return $this->privates['.service_locator.JBB4Uey'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'usuarioEvento' => ['privates', '.errored..service_locator.JBB4Uey.App\\Entity\\UsuarioEvento', NULL, 'Cannot autowire service ".service_locator.JBB4Uey": it references class "App\\Entity\\UsuarioEvento" but no such service exists.'],
]);