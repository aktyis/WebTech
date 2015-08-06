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
    else if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
        // if username and password are valid, log user in
        if ($_POST["user"] == USER && $_POST["pass"] == PASS)
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

<!DOCTYPE html>

<html>
  <head>
    <title>Log In</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td>
            <?php if (isset($_POST["user"])): ?>
              <input name="user" type="text" value="<?= htmlspecialchars($_POST["user"]) ?>">
            <?php elseif (isset($_COOKIE["user"])): ?>
              <input name="user" type="text" value="<?= htmlspecialchars($_COOKIE["user"]) ?>">
            <?php else: ?>
              <input name="user" type="text" value="">
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input name="pass" type="password"></td>
        </tr>
        <tr>
          <td></td>
          <td><input name="keep" type="checkbox"> &nbsp; keep me logged in until I click <b>log out</b></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Log In"></td>
        </tr>
      </table>      
    </form>
  </body>
</html>
