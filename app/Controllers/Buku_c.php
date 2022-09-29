<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Buku_c extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\Buku_m';

    public function view()
    {

        $data = [
            'id' => $this->request->getVar('id'),
        ];

        $respond = $this->model->view($data);
        return $this->respond($respond);
    }
}
