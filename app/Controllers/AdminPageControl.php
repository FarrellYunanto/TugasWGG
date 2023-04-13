<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminPageModel;

class AdminPageControl extends BaseController
{
    private $model;
    public function __construct(){
        $this->model = new AdminPageModel;
    }
    public function index()
    {
        $data['data_admin'] = $this->model->tampilkan_data();
        return view('adminPage.php', $data);
    }

    //tambah data ke tabel 'admin'
    public function tambah(){
        $tambah_data = $this->model->tambah_data([
           'NRP' => $this->request->getVar('nRPAdmin'),
           'Nama' => $this->request->getVar('adminName') 
        ]);

        $data['data_admin'] = $this->model->tampilkan_data();

        if($this->model->db->affectedRows() > 0){
        return redirect()
           ->to(site_url('/adminPages'))
           ->with('msg_success', 'Data berhasil ditambahkan');
        } else {
           return redirect()
           ->to(site_url('/adminPages'))
           ->with('msg_unsuccess', 'Data gagal ditambahkan');
        }

        return view('adminPage.php', $data);
    }

    public function edit($NRP){
        $data['fetch_data'] = $this->model->fetch_data($NRP);
        return view('editData.php', $data);
    }
}
