<?php

/**
 * Class Auth
 * Simply checks if user is logged in. In the app, several controllers use Auth::handleLogin() to
 * check if user if user is logged in, useful to show controllers/methods only to logged-in users.
 */
class Auth
{
    public static function handleLogin()
    {
        // initialize the session
        Session::init();

        // if user is still not logged in, then destroy session, handle user as "not logged in" and
        // redirect user to login page
        if (!isset($_SESSION['user_logged_in'])) {
            Session::destroy();
            header('location: ' . URL);
            // to prevent fetching views via cURL (which "ignores" the header-redirect above) we leave the application
            // the hard way, via exit(). @see https://github.com/panique/php-login/issues/453
            exit();
        } else if (isset($_SESSION['SOM_user_logged_in'])) {
            $ERROR = 'SORRY. You are not allowed to use this page unless you have Administrative Access<br />';
            require_once '_fb/403.html';
            exit();
        } else if (isset($_SESSION['AMS_user_logged_in'])) {
            $ERROR = 'SORRY. You are not allowed to use this page unless you have Administrative Access<br />';
            require_once '_fb/403.html';
            exit();
        } else if (isset($_SESSION['CRM_user_logged_in'])) {
            $ERROR = 'SORRY. You are not allowed to use this page unless you have Administrative Access<br />';
            require_once '_fb/403.html';
            exit();
        }
    }
    
    public static function SOM_handleLogin()
    {
        // initialize the session
        Session::init();

        // if user is still not logged in, then destroy session, handle user as "not logged in" and
        // redirect user to login page
        if (!isset($_SESSION['SOM_user_logged_in'])) {
            Session::destroy();
            header('location: ' . URL . 'som/login');
            exit();
        }
    }
    
    public static function AMS_handleLogin()
    {
        // initialize the session
        Session::init();

        // if user is still not logged in, then destroy session, handle user as "not logged in" and
        // redirect user to login page
        if (!isset($_SESSION['AMS_user_logged_in'])) {
            Session::destroy();
            header('location: ' . URL . 'ams/login');
            exit();
        }
    }
    
    public static function CRM_handleLogin()
    {
        // initialize the session
        Session::init();

        // if user is still not logged in, then destroy session, handle user as "not logged in" and
        // redirect user to login page
        if (!isset($_SESSION['CRM_user_logged_in'])) {
            Session::destroy();
            header('location: ' . URL . 'crm/login');
            exit();
        }
    }
    
    // IN ORDER TO AVOID LOGGING IN AGAIN WHEN THE USER IS ALREADY LOGGED IN
    public static function handleCred()
    {
        // initialize the session
        Session::init();

        if (isset($_SESSION['user_logged_in'])) {
            header('location: ' . URL);
            exit;
        }
        // user has remember-me-cookie ? then try to login with cookie ("remember me" feature)
        else if (!isset($_SESSION['user_logged_in']) && isset($_COOKIE['rememberme'])) {
            header('location: ' . URL .'login/loginWithCookie');
            exit;
        }
        else if (isset($_SESSION['SOM_user_logged_in'])) {
            header('location: ' . URL);
        }
    }
    
    public static function detectEnvironment()
    {
        if (ENVIRONMENT != 'Development' && ENVIRONMENT != 'Dev') {
            $ERROR = 'Required Model exists <b>but some classes was missing.</b><br />';
            require '_fb/error.html';
            exit;
        }
    }
    
    public static function identifyUser($user)
    {
        Session::init();
        Session::get('user_provider_type', $user);
        if ($user === 'ADMIN') {
            
        }
    }
}