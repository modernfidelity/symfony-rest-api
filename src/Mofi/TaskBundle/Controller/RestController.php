<?php

namespace Mofi\TaskBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RestController extends Controller {

  /**
   * @Rest\View
   */
  public function indexAction() {

    $data = "hello bob";

    $data = array(

      "monkey" => "bob"

    );


    return array('version' => $data);


  }
}

