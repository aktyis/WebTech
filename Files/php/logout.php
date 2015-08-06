<? 
    
    // enable sessions
    session_start();

    // delete cookies, if any
    setcookie("username", "", time() - 3600);
    setcookie("password", "", time() - 3600);

    // log user out
    setcookie(session_name(), "", time() - 3600);
    session_destroy();
?>