<?php

namespace App\Models;

use CodeIgniter\Model;

class ValidasiModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'Email';
    protected $returnType       = 'object';
    protected $allowedFields    = [];

    public function cek_user($email, $password){
        return $this
        ->where('Email', $email)
        ->where('password', $password)
        ->first();
    }
}
