<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        echo View("templates/header");
        echo View("index");
        echo View("templates/footer");
    }
}
