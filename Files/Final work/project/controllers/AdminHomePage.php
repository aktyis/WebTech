<?php
/**
 *
 */
class AdminHomePage
{

  function __construct()
  {
    require '/../views/AdminHomePage.php';
  }

  public function loginForm()
  {
    //require '/../views/loginForm.php';
  }

  public function show($data)
  {
    echo $data;
  }
}


?>
