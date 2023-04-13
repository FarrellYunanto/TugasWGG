<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ValidasiModel;

class ValidasiControl extends BaseController
{
    private $model;
    public function __construct(){
        $this->model = new ValidasiModel;
    }

    public function index()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cek_user = $this->model->cek_user($email, $password);

        if(!$cek_user){
            return view('/loginPage');
            die;
        } else {
         //  return view('homePage');
             return redirect()
            ->to(site_url('/validasiSuccess'))
            ->with('msg_success', 'Login success');
        }
    }

    public function sukses(){
        return view('homePage');
    }
}
