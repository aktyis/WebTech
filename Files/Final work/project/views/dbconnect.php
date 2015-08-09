<?php
$db_connect = mysqli_connect("localhost" , "root" , "" ,"webtechprojectdatabase");

if (mysqli_connect_errno()) 
{
    echo mysqli_connect_error();
    exit();
} 
else 
{	echo "";	}
?>