<?php

		$db_connect = mysqli_connect("localhost" , "root" , "" ,"webtechprojectdatabase");
		$get_id="13-23471-1";
		$sql= "SELECT * FROM students WHERE user_id='$get_id' ";
		$result = $db_connect->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{		
				$name = $row['name'];
				$id =  $row['user_id'];
				$contact =  $row['cantact_no'];
				$email =  $row['email'];
				$bloodgroup =  $row['blood_group'];
				$currAdd =  $row['current_address'];
				$gender =  $row['gender'];
				$gurdianName = $row['gurdian_name'];
				$gurContact =  $row['gurdians_contact'];
			}
		}
		$name = mysql_real_escape_string($name);
		$id = mysql_real_escape_string($id);
		$contact = mysql_real_escape_string($contact);
		$email = mysql_real_escape_string($email);
		$bloodgroup = mysql_real_escape_string($bloodgroup);
		$currAdd = mysql_real_escape_string($currAdd);
		$gender = mysql_real_escape_string($gender);
		$gurdianName = mysql_real_escape_string($gurdianName);
		$gurContact = mysql_real_escape_string($gurContact);
		
				//Build Result String
			$display_string = "<table>";
			$display_string .= "<td>";
			$display_string .= "<tr>Name</tr>";
			$display_string .= "<tr>ID</tr>";
			$display_string .= "<tr>COntact</tr>";
			$display_string .= "<tr>Email</tr>";
			$display_string .= "<tr>Blood Group</tr>";
			$display_string .= "<tr>Current Address</tr>";
			$display_string .= "<tr>Gender</tr>";
			$display_string .= "<tr>Gurdian Name</tr>";
			$display_string .= "<tr>Gurdian Contact</tr>";
			$display_string .= "</td>";

			// Insert a new row in the table for each person returned
			while($row = $result->fetch_assoc()) 
			{	
				$display_string .= "<td>";
					$display_string .= "<tr>Name</tr>";
					$display_string .= "<tr>ID</tr>";
					$display_string .= "<tr>COntact</tr>";
					$display_string .= "<tr>Email</tr>";
					$display_string .= "<tr>Blood Group</tr>";
					$display_string .= "<tr>Current Address</tr>";
					$display_string .= "<tr>Gender</tr>";
					$display_string .= "<tr>Gurdian Name</tr>";
					$display_string .= "<tr>Gurdian Contact</tr>";
				$display_string .= "</td>";
				
			}
			$display_string .= "</table>";
			echo $display_string;
			$db_connect->close();	
		
?>