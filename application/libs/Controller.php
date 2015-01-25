<?php

  /*
  * Todo Application
  *
  * @author Charles R. Schlue
  * @license http://opensource.org/licenses/MIT MIT License
  *
  * Controller Class.
  *
  */

  class Controller {

    function __construct(){
      //setup database connection
      try {
        $this->db = new Database();
      } catch  (PDOException $e) {
        die('Database connection could not be established.');
        var_dump ($e);
      }

      //call view class to make render method available to controller calling parent constructor
      $this->view = new View();

    }
  }
