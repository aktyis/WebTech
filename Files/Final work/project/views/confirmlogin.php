<?php
require 'dbconnect.php';
require 'check.php';


$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // getting current location


session_start();

$user_ok = false;

$log_username = "";
$log_password = "";

if ((isset($_SESSION["user"]) ) && (isset( $_SESSION["pass"])))
{
	$log_username = preg_replace('#[^a-z0-9]#i', '', $_SESSION['user']);
	$log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['pass']);
	// Verify the user
	$user_ok = evalLoggedUser($db_connect,$log_username,$log_password);
}
else if ( (isset($_COOKIE["user"])) && (isset($_COOKIE["pass"]) ) )
{
    $_SESSION['user'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['user']);
    $_SESSION['pass'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['pass']);
    
	
	$log_username = $_SESSION['user'];
	$log_password = $_SESSION['pass'];
    
	// Verify the user
	$user_ok = evalLoggedUser($db_connnect,$log_username,$log_password);
    
}
// If user is already logged in, redirect


if($user_ok == true)
{
    echo "saved okk";
	header("location: ?u=".$_SESSION["user"]); // redirect to appropieat user
    exit();
}


if(isset($_POST["username"]))
{

	// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
	$username = $_POST['username'];
	$password = md5($_POST['password']);
    
	// FORM DATA ERROR HANDLING
	if($username == "" || $password == "")
    {
        header("location: http://failedloginForm.php" ); 
        echo "login_failed";
        exit();
	} 
    else 
    {
        $active="active";
        $status="";
        
	   // END FORM DATA ERROR HANDLING
		$sql = "SELECT * FROM users WHERE user_id='$username' AND validity='$active'";
        
        $query = mysqli_query($db_connect, $sql);
        $row = mysqli_fetch_row($query);
        
		$db_username = $row[0];
        $db_pass_str = $row[1];
        $status = $row[2];
		if($password != $db_pass_str)
        {
			echo "login_failed";
            header("location: http://failedloginForm.php" ); 
            
            exit();
		}
        else 
        {
			// CREATE THEIR SESSIONS AND COOKIES
			$_SESSION['user'] = $db_username;
			$_SESSION['pass'] = $db_pass_str;
            
			setcookie("user", $db_username,time()+5, "/", "", "", TRUE);
    		setcookie("pass", $db_pass_str,time()+5, "/", "", "", TRUE); 
			
       
            print("<users>");
                print("<price>{$db_username}</price>");
                print("<high>{$status}</high>");
            print("</users>");

           
            
			echo $db_username;
            if($status=="student")
            {
                header("location: http://studentHomePage.php" ); 
            }
            else
                header("location: http://AdminHomePage.php" );
		    exit();
        }
	}
	exit();
}

?>