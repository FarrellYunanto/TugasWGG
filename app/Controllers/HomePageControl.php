<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomePageControl extends BaseController
{
    public function index()
    {
        return view('homePage.php');
    }
}
