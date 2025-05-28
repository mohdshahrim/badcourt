<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrganizationModel;
use App\Models\PlayerModel;
use App\Models\TeamModel;

class Team extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('teams');
        $builder->select('teams.id, teams.organization_id, teams.team_name, p1.name as p1, p2.name as p2, r.name as r, teams.category, organizations.logo_path');
        $builder->join('organizations', 'organizations.id = teams.organization_id');
        $builder->join('players as p1', 'p1.id = teams.player1', 'left');
        $builder->join('players as p2', 'p2.id = teams.player2', 'left');
        $builder->join('players as r', 'r.id = teams.reserve', 'left');
        $query = $builder->get();
        //$teamModel = new TeamModel();

        $data = [
            'team' => $query->getResultArray(),
        ];

        echo view('team/header');
        echo view('team/index', $data);
        echo view('team/footer');
    }

    public function pageTeamOrg()
    {
        $organizationModel = new OrganizationModel();
        $data = [
            'organization' => $organizationModel->findAll(),
        ];

        echo view('team/header');
        echo view('team/org', $data);
        echo view('team/footer');
    }

    public function pageTeamAdd($orgid)
    {
        $organizationModel = new OrganizationModel();
        $playerModel = new PlayerModel();

        $data = [
            'organization' => $organizationModel->find($orgid),
            'player' => $playerModel->where('organization_id', $orgid)->findAll(),
        ];

        echo view('team/header');
        echo view('team/team-add', $data);
        echo view('team/footer');
    }

    public function postTeamCreate()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'team_name' => 'required',
        ]))
        {
            $team_name = $this->request->getPost('team_name');
            $player1 = $this->request->getPost('player1'); // player id
            $player2 = $this->request->getPost('player2'); // player id
            $reserve = $this->request->getPost('reserve');
            $category = $this->request->getPost('category');
            $organization_id = $this->request->getPost('organization_id'); // org id

            $data = [
                'team_name' => $team_name,
                'player1' => $player1,
                'player2' => $player2,
                'reserve' => $reserve,
                'category' => empty(!$category)?$category:"Men",
                'organization_id' => $organization_id,
            ];

            $teamModel = new TeamModel();

            $teamModel->insert($data);

            $message['status'] = "Success";
            $message['message'] = "Team created";
            $message['id'] = $teamModel->getInsertID();

            echo view('team/header');
            echo view('team/message', $message);
            echo view('team/footer');
        }
    }

    public function pageTeamEdit($id)
    {
        $organizationModel = new OrganizationModel();
        $playerModel = new PlayerModel();
        $teamModel = new TeamModel();

        $organization_id = $teamModel->where('id', $id)->first()['organization_id'];

        $data = [
            'organization' => $organizationModel->find($organization_id),
            'player' => $playerModel->where('organization_id', $organization_id)->findAll(),
            'team' => $teamModel->find($id),
        ];

        echo view('team/header');
        echo view('team/team-edit', $data);
        echo view('team/footer');
    }

}