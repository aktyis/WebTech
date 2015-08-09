<?php
/**
 *
 */
class Home
{

  function __construct()
  {
    require '/../views/home_view.php';
  }

  public function showAll()
  {
    echo 'we are all here';
  }

  public function show($data)
  {
    echo $data;
  }
}


?>
