<?php

  /*
  * Todo Application
  *
  * @author Charles R. Schlue
  * @license http://opensource.org/licenses/MIT MIT License
  *
  * Index Class
  *
  */

  class Index extends Controller{

    function __construct(){
      //call controller construct to start database connection and any other construct logic
      parent::__construct();

    }

    function index(){

      $this->view->render('index/index');

    }

  }
