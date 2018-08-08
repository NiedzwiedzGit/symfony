<?php
namespace  App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DefaultController
{
  public function home()
  {
  return new Response("home page");
  }
}

 ?>
