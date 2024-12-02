<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Pelanggan as ModelsPelanggan;
class Pelanggan extends BaseController
{
    public function index()
    {
        $model = new ModelsPelanggan();
        $data = $model->findAll();

        return view('pages/v_pelanggan', $data);
    }
}
