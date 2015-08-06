<?php

    // enable sessions
    session_start();

    // were this not a demo, these would be in some database
    define("USER", "nsarwar");
    define("PASS", "mypass");

    // if username and password were saved in cookie, check them
    if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"]))
    {
        // if username and password are valid, log user back in
        if ($_COOKIE["user"] == USER && $_COOKIE["pass"] == PASS)
        {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;

            // re-save username and password in cookies for another week
            setcookie("user", $_COOKIE["user"], time() + 7 * 24 * 60 * 60);
            setcookie("pass", $_COOKIE["pass"], time() + 7 * 24 * 60 * 60);

            // redirect user to home page, using absolute path, per
            // http://us2.php.net/manual/en/function.header.php
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: http://$host$path/home.php");
            exit;
        }
    }

    // else if username and password were submitted, grab them instead
    else if (isset($_POST["username"]) && isset($_POST["password"]))
    {
        // if username and password are valid, log user in
        if ($_POST["username"] == USER && $_POST["password"] == PASS)
        {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;

            // save username in cookie for a week
            setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);

            // save password in, ack, cookie for a week if requested
            if ($_POST["keep"])
                setcookie("pass", $_POST["pass"], time() + 7 * 24 * 60 * 60);

            // redirect user to home page, using absolute path, per
            // http://us2.php.net/manual/en/function.header.php
            $host = $_SERVER['HTTP_HOST'];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: http://$host$path/home.php");
            exit;
        }
    }
?>
