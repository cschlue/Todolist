<?php

  /*
  * Todo Application
  *
  * @author Charles R. Schlue
  * @license http://opensource.org/licenses/MIT MIT License
  *
  * Configuration File.
  *
  */

  //Base Url
  define('URL', 'http://localhost/todolist');

  //Define Paths
  define('LIBS_PATH', 'application/libs/');
  define('CONTROLLER_PATH', 'application/controllers/');
  define('MODELS_PATH', 'application/models/');
  define('VIEWS_PATH', 'application/views/');

  //Database Definitions -- Currently Using Sqlite.
  define('DB_TYPE', 'sqlite');
  define('SQLITE', 'sqlite:db.sdb');
