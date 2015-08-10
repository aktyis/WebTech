<? php

	mysql_connect("localhost","root","");
	mysql_select_db("webtechprojectdatabase");	
	print "Name : ";
	$get_id="13-23669-1";//$_POST['id'];
	
			if (mysql_query($query))
			{	
				$sql= "SELECT * FROM students WHERE user_id='$get_id' ";
				$result = mysql_query ($sql) or die (mysql_error ());
				while ($row = mysql_fetch_array ($result))
				{
					echo "Name : ". $sName = $row["name"];
				}			
			}	
	
	?>
		