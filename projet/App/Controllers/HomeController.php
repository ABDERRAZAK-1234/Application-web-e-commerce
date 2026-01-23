<?php
namespace Projet\App\Controllers;

use Projet\App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view('front/index');
    }
}