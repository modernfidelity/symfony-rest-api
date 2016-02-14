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

    // demo list of objects
    $item_list = array();

    $item_list[] = array(
      "id" => "uuid-v4",
      "title" => "item1",
      "img" => "s3://filename1",
    );
    $item_list[] = array(
      "id" => "uuid-v4",
      "title" => "item2",
      "img" => "s3://filename2",
    );

    $data = array(

      "monkey" => "bob",
      "items" => $item_list

    );


    return array('version' => $data);


  }
}

