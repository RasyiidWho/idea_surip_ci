<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('omah/index');
    }

    public function bukux()
    {
        $data = [
			'id' => $this->request->getVar('id'),
		];
        return view('omah/bukux', $data);
    }

    public function buku()
    {
        return view('omah/buku');
    }
}
