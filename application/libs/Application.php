<?php

  /*
  * Todo Application
  *
  * @author Charles R. Schlue
  * @license http://opensource.org/licenses/MIT MIT License
  *
  * Application Class.
  *
  */

  class Application {

    //Url Controller
    private $url_controller = null;
    //Url Action
    private $url_action = null;
    //Url Params
    private $url_params = null;
    //Param to store if Json is requested
    private $url_json = null;


    //construct everytime an instance of the Application class is created.
    function __construct(){

      //Split up url into something we can parse /controller=>model/view
      $this->splitUrl();

      //Check if controller is set
      if (!$this->url_controller){
        //controller was not set
        require CONTROLLER_PATH . 'index.php';
        $controller = new Index();
        $controller->index();
      } else {
        //check if controller exists
        if (!file_exists(CONTROLLER_PATH . $this->url_controller . '.php')){
          //controller did not exist, go to error page.
          header('location:' . URL . '/error');
        } else {
          require CONTROLLER_PATH . $this->url_controller . '.php';
          if (!$this->url_action){
            //no action was found, load default action
            $controller = new $this->url_controller;
            $controller->index();
          } else {
            //check if action exists in the class
            if (method_exists($this->url_controller, $this->url_action)){
              //action exists, load action
              $controller = new $this->url_controller;
              $controller->{$this->url_action}();
            } else {
              //action does not exist 404
              header('location:' . URL . '/error');
            }
          }
        }
      }


    }
    //Split up url into something we can parse /controller=>model/view
    private function splitUrl(){

      //Check if url is set in get request
      if (isset($_GET['url'])) {
        //trim tailing forward slash, sanitize for bad char(s) and seperate into usable array
        $url = trim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        //Set Controller and action to related url string
        $this->url_controller = isset($url[0]) ? $url[0] : null;;
        $this->url_action = isset($url[1]) ? $url[1] : null;;
        //Remove controller and action from the split URL
        unset($url[0], $url[1]);
        //Store remaining values as params
        $this->url_params = array_values($url);
        //Check if Json was requested
        $url_json = isset($_GET['json']);

      }

    }

  }
