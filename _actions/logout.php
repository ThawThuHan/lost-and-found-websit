<?php

include("../vendor/autoload.php");

use Helpers\HTTP;

session_start();
session_unset();
session_destroy();

HTTP::redirect('/index.php');
