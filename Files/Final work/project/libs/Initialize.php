<?php

/**
 *
 */
class Initialize
{
  
  function __construct()
  {
	  require 'controllers/Home.php';
	  new Home();
	  
    if(isset($_GET['url']))//checks if any url is typed furter after index.php
    {
      $url = explode('/',$_GET['url']);//separated by '/' words
      for ($i=0; $i <count($url) ; $i++)//omitting all empty ones
      {
        if(empty($url[$i]))
        {
          unset($url[$i]);
          continue;
        }
      }
      // foreach ($url as $key => $value) {
      //   echo $value.'<br/>';
      // } ///used to show all url parts divided by '/'
      $file = 'controllers/'.$url[0].'.php';
      if(file_exists($file))
      {
		require 'controllers/'.$url[0].'.php';
		$controller = new Home();
      }
      else
      {
        throw new Exception($file.' file donot exits');
      }

      if(isset($url[1])&&isset($url[2]))
      {
        $controller->{$url[1]}($url[2]);
      }
      else if(isset($url[1]))
      {
        $controller->{$url[1]}();
      }
    }

  }
}

 ?>
