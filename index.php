<?php

  /*
  * Todo Application
  *
  * @author Charles R. Schlue
  * @license http://opensource.org/licenses/MIT MIT License
  *
  */

  //Application Configuration
  require 'application/config/config.php';
  //Autoload Application Scripts defined in config
  require 'application/config/autoload.php';

  //Start new instance of application class
  $app = new application();
