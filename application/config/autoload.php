<?php

  /*
  * Todo Application
  *
  * @author Charles R. Schlue
  * @license http://opensource.org/licenses/MIT MIT License
  *
  * Autoloader.
  *
  */

  //Setup Autoloader
  function autoload($class){
    //Check if files exist in libs folder
    if (file_exists(LIBS_PATH . $class . ".php")) {
      //require files in libs path
      require LIBS_PATH . $class . ".php";
    } else {
      //if an error occurs loading a file exit and echo the file is missing.
      exit ('The file' . $class . '.php is missing in the libs folder.');
    }
  }

  //use spl_autoload_register to run the autoload function, this will load classes as needed from the LIBS_PATH.
  spl_autoload_register("autoload");
