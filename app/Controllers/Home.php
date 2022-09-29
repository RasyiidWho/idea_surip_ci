<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('omah/index');
    }

    public function buku()
    {
        $data = [
			'id' => $this->request->getVar('id'),
		];
        return view('omah/buku', $data);
    }
}
