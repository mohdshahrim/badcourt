<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OrganizationModel;

class Organization extends BaseController
{
    public function index()
    {
        $organizationModel = new OrganizationModel();
        $data = [
            'organization' => $organizationModel->findAll(),
        ];

        echo view('organization/header');
        echo view('organization/index', $data);
        echo view('organization/footer');
    }

    public function pageOrganizationAdd()
    {
        echo view('organization/header');
        echo view('organization/organization-add');
        echo view('organization/footer');
    }

    public function postOrganizationCreate()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'name' => 'required',
            'logo' => [
                'rules' => 'uploaded[logo]'
                    . '|is_image[logo]'
                    . '|mime_in[logo,image/jpg,image/jpeg,image/png,image/gif]'
                    . '|max_size[logo,2048]', // 2MB max
            ],
        ]))
        {
            $name = $this->request->getPost('name');
            $short_name = $this->request->getPost('short_name');
            $file_name = $short_name.'.png';

            $this->request->getFile('logo')->store('logo/', $file_name);

            $file = new \CodeIgniter\Files\File(WRITEPATH . 'uploads/logo/' . $file_name);
            $file->move(ROOTPATH . 'public/logo');

            $organizationModel = new OrganizationModel();

            $data = [
                'name' => $name,
                'short_name' => $short_name,
                'logo_path' => 'logo/'.$file_name,
            ];

            $organizationModel->insert($data);

            $message['status'] = "Success";
            $message['message'] = "Organization created";
            $message['id'] = $organizationModel->getInsertID();

            echo view('organization/header');
            echo view('organization/message', $message);
            echo view('organization/footer');
        }
    }

    public function pageOrganizationEdit($id)
    {

    }

    public function postOrganizationUpdate()
    {

    }
}
