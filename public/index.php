<?php

/**
 * MOBILIZER
 *
 * @package jejMIS (MOD)
 * @author jccultima
 * 
 */

/**
 * THIS IS THE STARTING POINT OR ROOT OF THE MVC FRAMEWORK
 * This will load all libraries and configurations required for this app.
 */

// TODO get rid of this and work with namespaces + composer's autoloader

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'sys' . DIRECTORY_SEPARATOR);

// This is the (totally optional) auto-loader for Composer-dependencies (to load tools into your project).
// If you have no idea what this means: Don't worry, you don't need it, simply leave it like it is.
if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

// load application config (error reporting etc.)
require APP . '/config/config.php';
// other configs pulled from PHP-LOGIN
require APP . '/config/autoload.php';

// FOR DEVELOPMENT: this loads PDO-debug, a simple function that shows the SQL query (when using PDO).
// If you want to load pdoDebug via Composer, then have a look here: https://github.com/panique/pdo-debug
require APP . '/libs/helper.php';

// other libs pulled from PHP-LOGIN
require APP . '/libs/Auth.php';
require APP . '/libs/Session.php';
//DISABLED FOR NOW FOR SPEED
//require APP . '/libs/password_compatibility_library.php';

// load application class
require APP . '/core/application.php';
require APP . '/core/controller.php';

/**
 * This will start the application
 */
$app = new Application();