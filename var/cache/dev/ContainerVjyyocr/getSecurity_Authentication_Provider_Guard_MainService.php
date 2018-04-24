<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.guard.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserChecker.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Guard/Provider/GuardAuthenticationProvider.php';

return $this->services['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['app.form_login_authenticator']) ? $this->services['app.form_login_authenticator'] : $this->load('getApp_FormLoginAuthenticatorService.php')) && false ?: '_'};
}, 1), ${($_ = isset($this->services['security.user.provider.concrete.database_users']) ? $this->services['security.user.provider.concrete.database_users'] : $this->load('getSecurity_User_Provider_Concrete_DatabaseUsersService.php')) && false ?: '_'}, 'main', new \Symfony\Component\Security\Core\User\UserChecker());
