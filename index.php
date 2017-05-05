<?php
namespace app;

use app\controller;

  /**
  * Connects the controller.
  */
  require_once '../scripts/controllers/menu_controller.php';

  /**
  * Instantiates the connected controller.
  */
  $controller = new \app\scripts\controllers\MenuController();

  $result = $controller->index();

  $items = json_decode( $result );

  echo sizeof( $items );
 ?>
