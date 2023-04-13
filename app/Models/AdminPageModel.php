<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminPageModel extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'NRP';
    protected $returnType       = 'object';
    protected $allowedFields    = ['NRP', 'Nama'];

    public function tampilkan_data()
    {
        return $this
        ->select('*')
        ->db
        ->table($this->table)
        ->orderBy('NRP', 'Nama')
        ->get()
        ->getResult();
    }

    public function tambah_data($data){
        return $this->insert($data);
    }

    public function fetch_data($NRP){
        return $this
        ->where('NRP', $NRP)
        ->first();
    }

    public function edit_data($data)
    {
        return $this
            ->set([
                'Nama' => $data['Nama'],
            ])
            ->where('NRP', $data['NRP'])
            ->update();
    }

    public function hapus_data($NRP)
    {
        return $this
            ->where('NRP', $NRP)
            ->delete();
            
    }
}
