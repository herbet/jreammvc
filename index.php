<?php

require 'config.php';
require 'util/Auth.php';

// Also spl_autoload_register (Take a look at it if you like)
function my_autoload($class) {
	require LIBS . $class .".php";
}

spl_autoload_register("my_autoload");


/*// Use an autoloader!
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// Library
require 'libs/Database.php';
require 'libs/Session.php';
require 'libs/Hash.php';
*/

$bootstrap = new Bootstrap();
$bootstrap->init();