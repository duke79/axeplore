<?php

/**
 * These are the database login details
 */  
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "root");    // The database username. 
define("PASSWORD", "");    // The database password. 
define("DATABASE", "axr");    // The database name.
 
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member"); 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!



// connect db--
function connectDB(){
    $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8', USER, PASSWORD);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    //$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
}

 
function secure_session_start() {
    $session_name = 'secure_session_id_identifier_to_prevent_session_hijacking_fuck_you';   // Set a custom session name
    $secure = SECURE;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"], 
        $cookieParams["domain"], 
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 

    //echo htmlentities(session_name());
    //echo session_id();

    if (!isset($_SESSION['last_regeneration']) || ++$_SESSION['last_regeneration'] >= 20) {
        $_SESSION['last_regeneration'] = 0;
        session_regenerate_id(true); // regenerated the session, delete the old one. 
    }  
}