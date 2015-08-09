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

  public function loginForm()
  {
    require '/../views/loginForm.php';
  }

  public function show($data)
  {
    echo $data;
  }
}


?>
