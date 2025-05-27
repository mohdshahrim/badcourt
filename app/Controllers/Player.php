<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PlayerModel;

class Player extends BaseController
{
    public function index()
    {
        //
        echo view('player/header');
        echo view('player/index');
        echo view('player/footer');
    }

    public function pagePlayerAdd()
    {
        echo view('player/header');
        echo view('player/player-add');
        echo view('player/footer');
    }

    public function postPlayerCreate()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'name' => 'required',
        ]))
        {
            $name = $this->request->getPost('name');
            $gender = $this->request->getPost('gender'); // 'm' or 'f'
            $contact_no = $this->request->getPost('contact_no');
            $organization_id = $this->request->getPost('organization'); // org id

            $data = [
                'name' => $name,
                'gender' => $gender,
                'contact_no' => empty(!$contact_no)?$contact_no:" ",
                'organization_id' => $organization_id,
            ];

            $playerModel = new PlayerModel();

            $playerModel->insert($data);

            $message['status'] = "Success";
            $message['message'] = "Player created";
            $message['id'] = $playerModel->getInsertID();

            echo view('player/header');
            echo view('player/message', $message);
            echo view('player/footer');
        }
    }
}
