<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Buku_c extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\Buku_m';

    public function view()
    {
        $respond = [
            'status' => 'sukses',
            'semua' => $this->model->view()
        ];
        return $this->respond($respond);
    }
}
