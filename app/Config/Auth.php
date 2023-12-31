<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Myth\Auth\Config\Auth as AuthConfig;
// use Myth\Auth\Language\id;

class Auth extends AuthConfig
{

    /**
     * --------------------------------------------------------------------
     * Require Confirmation Registration via Email
     * --------------------------------------------------------------------
     *
     * When enabled, every registered user will receive an email message
     * with an activation link to confirm the account.
     *
     * @var string|null Name of the ActivatorInterface class
     */
    // public $requireActivation = 'Myth\Auth\Authentication\Activators\EmailActivator';
    public $requireActivation = null;
}
