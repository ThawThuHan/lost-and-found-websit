<?php

namespace Helpers;

class Auth
{
    static $loginUrl = "/index.php";

    static function check()
    {
        session_start();
        if (isset($_SESSION['lf-user'])) {
            return $_SESSION['lf-user'];
        } else {
            HTTP::redirect(static::$loginUrl);
            return false;
        }
    }
}
