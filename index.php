<?php
  /**
  * Connects the controller.
  */
  require_once dirname(__FILE__) . '/../controllers/menuController.php';

  /**
  * Instantiates the connected controller.
  */
  $controller = new MenuController();

  $result = $controller->index();

  $items = json_decode( $result );

  echo sizeof( $items );
 ?>
