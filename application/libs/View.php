<?php

/*
* Todo Application
*
* @author Charles R. Schlue
* @license http://opensource.org/licenses/MIT MIT License
*
* View Class.
*
*/

  class View {

    public function render($filename) {

      require VIEWS_PATH . '_templates/header.php';
      require VIEWS_PATH . $filename . '.php';
      require VIEWS_PATH . '_templates/footer.php';

    }


  }
