<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku_m extends Model
{
    protected $table = 'buku';


    public function view()
    {
        // return $this->findAll();
        return $this->select()->findAll();
    }
}
