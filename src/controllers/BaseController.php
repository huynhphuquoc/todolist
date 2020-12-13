<?php
namespace Src\Controllers;

class BaseController {
    protected $folder;

    // function using display result
    function render($file, $data = array()) {

        // check file
        $view_file = 'src/views/' . $this->folder . '/' . $file . '.php';

        if (is_file($view_file)) {
            extract($data);

            ob_start();
            require_once($view_file);
            $content = ob_get_clean();

            require_once('src/views/application.php');
        } else {
            header('Location: index.php?controller=pages&action=error');
        }
    }
}