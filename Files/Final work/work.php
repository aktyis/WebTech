<?php

$length = count($_POST);

foreach($_POST as $key => $value)
{
  echo $value."<br/>";
}
echo $length."outer";
 ?>
