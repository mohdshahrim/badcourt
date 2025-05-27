<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SetupModel;

class Setup extends BaseController
{
    public function index()
    {
        echo view('setup/header');
        echo view('setup/index');
        echo view('setup/footer');
    }

    public function postSetupUpdate()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'eventname' => 'required',
        ]))
        {
            $eventname = $this->request->getPost('eventname');
            $subtext = $this->request->getPost('subtext');
            $eventvenue = $this->request->getPost('eventvenue');

            $data = [
                'eventname' => $eventname,
                'subtext' => empty(!$subtext)?$subtext:" ",
                'eventvenue' => empty(!$eventvenue)?$eventvenue:" ",
            ];

            $setupModel = new SetupModel();
            $setupModel->update(1, $data);

            return redirect()->to('home');
        }
    }
}
