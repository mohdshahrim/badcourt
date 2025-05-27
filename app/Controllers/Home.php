<?php

namespace App\Controllers;
use App\Models\SetupModel;

class Home extends BaseController
{
    public function index()
    {
        $setupModel = new SetupModel();
        $data = [
            'event' => $setupModel->find(1),
        ];

        echo view('home/header');
        echo view('home/index', $data);
        echo view('home/footer');
    }
}
