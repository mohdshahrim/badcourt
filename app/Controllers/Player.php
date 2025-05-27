<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OrganizationModel;
use App\Models\PlayerModel;

class Player extends BaseController
{
    public function index()
    {
        $playerModel = new PlayerModel();
        $data = [
            'player' => $playerModel->findAll(),
        ];

        echo view('player/header');
        echo view('player/index', $data);
        echo view('player/footer');
    }

    public function pagePlayerAdd()
    {
        $organizationModel = new OrganizationModel();
        $data = [
            'organization' => $organizationModel->findAll(),
        ];

        echo view('player/header');
        echo view('player/player-add', $data);
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

    public function pagePlayerEdit($id)
    {
        $organizationModel = new OrganizationModel();
        $playerModel = new PlayerModel();

        $data = [
            'organization' => $organizationModel->findAll(),
            'player' => $playerModel->find($id),
        ];

        echo view('player/header');
        echo view('player/player-edit', $data);
        echo view('player/footer');
    }

    public function postPlayerUpdate()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'id' => 'required',
        ]))
        {
            $id = $this->request->getPost('id');
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

            $playerModel->update($id, $data);

            $message['status'] = "Success";
            $message['message'] = "Player updated";
            $message['id'] = $id;

            echo view('player/header');
            echo view('player/message', $message);
            echo view('player/footer');
        }
    }
}
