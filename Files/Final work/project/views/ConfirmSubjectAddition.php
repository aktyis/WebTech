
<?php

    require './dbconnect.php';

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // getting current location


    $course_id = $_POST["course_id"];
    $discipline_name = $_POST["discipline_name"];
    $course_name = $_POST["course_name"];
    if($_POST["is_open"]=="on")
		$is_open = 1;
    else
	{
		$is_open = 0;
	}
    $total_capacity = $_POST["total_capacity"];
    $filled_number = $_POST["filled_number"];
    $duration= $_POST["duration"];
    $start_time= $_POST["start_time"];
    $end_time= $_POST["end_time"];
    $day = $_POST["day"];
    $room = $_POST["room"];
    $sec = $_POST["sec"];

    $insert = "INSERT INTO courses(course_id, discipline_name, course_name, is_open, total_capacity, filled_number, duration, start_time, end_time, day, room, sec) VALUES ('$course_id','$discipline_name','$course_name','$is_open','$total_capacity','$filled_number','$duration','$start_time','$end_time','$day','$room','$sec')";
			if(mysqli_query($db_connect, $insert))
			{
                echo "Records added successfully.";
               header("location: http://$host$uri/../AdminHomePage.php" );
			}
			else
			{
				echo "ERROR: Could not able to execute $insert. " . mysqli_error($db_connect);
			}


?>
