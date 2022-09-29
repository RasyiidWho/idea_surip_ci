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
            'rekomendasi' => $this->request->getVar('id'),
        ];

        $respond = $this->model->view($data);
        return $this->respond($respond);
    }

    public function view_judul($judul)
    {

        $data = [
            'judul' =>  str_replace("-"," ",$judul),
        ];

        $respond = $this->model->view_judul($data);
        return $this->respond($respond);
    }
}
