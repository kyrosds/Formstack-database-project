<?php
require_once dirname(__FILE__) . '/../controllers/menuController.php';

  $control = new MenuController();

  echo $control.show();
?>
