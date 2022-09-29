<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku_m extends Model
{
    protected $table = 'buku';


    public function view($data)
    {
        $array = ['id_buku' => $data['id']];
        if($data['id']) {
            return $this->where($array)->findAll();
        } else if($data['rekomendasi']) {
            return $this->findAll();
        } else {
            return $this->findAll();
        }
    }
}
