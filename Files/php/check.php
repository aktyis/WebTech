<?php

function evalLoggedUser($conx , $u , $p)
{
	$sql = "SELECT * FROM users WHERE user_id='$u' AND  password='$p'";
    $query = mysqli_query($conx, $sql);
    $numrows = mysqli_num_rows($query);
	if($numrows > 0)
    {
		return true;
	}

}

 ?>