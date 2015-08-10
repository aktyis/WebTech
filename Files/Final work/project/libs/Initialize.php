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
    ob_end_clean();
		$controller = new $url[0]();
      }
      else
      {
		  if(isset($url[1])&&isset($url[2]))
		  {
			require 'controllers/'.$url[1].'.php';
			ob_end_clean();
			$controller = new $url[1]();
		  }
		  else if(isset($url[1]))
		  {
			require 'controllers/'.$url[1];
			ob_end_clean();
			$controller = new $url[1]();
		  }
		  //else	throw new Exception($file.' file donot exits');
      }

      

    }

  }
}

 ?>
