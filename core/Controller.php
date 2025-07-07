<?php

namespace Core;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        require_once "../app/views/layout.php";
    }
}
