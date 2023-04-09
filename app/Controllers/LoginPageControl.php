<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginPageControl extends BaseController
{
    public function index()
    {
        return view('loginPage.php');
    }
}
