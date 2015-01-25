<?php

  /*
  * Todo Application
  *
  * @author Charles R. Schlue
  * @license http://opensource.org/licenses/MIT MIT License
  *
  * Database Class.
  *
  */

  class Database extends PDO{

    function __construct() {

      //PDO options
      $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

      parent::__construct(SQLITE);


    }


  }
