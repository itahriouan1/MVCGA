<?php

namespace lib\Controller;

use lib\View\View;

class AbstractController {
    protected $view;

    public function __construct() {
        $this->view = new View();
    }
}