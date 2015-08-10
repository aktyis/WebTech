<?php 
    
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // getting current location

    // enable sessions
    session_start();

    // delete cookies, if any
    setcookie("username", "", time() - 3600);
    setcookie("password", "", time() - 3600);

    // log user out
    setcookie(session_name(), "", time() - 3600);
    session_destroy();

     header("location: http://$host$uri/../home_view.php" );
    
?>