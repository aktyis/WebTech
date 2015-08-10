
<?php
    
    require 'dbconnect.php';
    
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // getting current location


    $userId = $_POST["username"];
    $name = $_POST["name"];
    $contactNo = $_POST["mobile"];
    $email = $_POST["email"];
    $bloodGroup = $_POST["bloodGroup"];
    $currentAddress = $_POST["presentAddress"];
    $gender= $_POST["gender"];
    $guerdianName= $_POST["gurdianName"];
    $guerdianContact= $_POST["username"];
    $password = md5($_POST["password"]);
    $status = "student";
    $validity = "active";

    $insert = "INSERT INTO users(user_id, password, status, validity) VALUES ('$userId', '$password', '$status', '$validity')";
			if(mysqli_query($db_connect, $insert))
			{
                echo "Records added successfully.";
			} 
			else
			{
				echo "ERROR: Could not able to execute $insert. " . mysqli_error($db_connect);
			}
    $insert = "INSERT INTO students(user_id, name, cantact_no, email, blood_group, current_address, gender, gurdian_name, gurdians_contact) VALUES ('$userId', '$name', '$contactNo', '$email','$bloodGroup', '$currentAddress', '$gender', '$guerdianName', '$guerdianContact')";
            if(mysqli_query($db_connect, $insert))
            {
				echo "Records added successfully.";
                header("location: ./AdminHomePage.php" );
            } 
            else
            {
                echo "ERROR: Could not able to execute $insert. " . mysqli_error($db_connect);
            }
    
?>