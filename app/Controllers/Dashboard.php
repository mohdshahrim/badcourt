<?php

namespace App\Controllers;

use App\Models\TeamModel;
use App\Models\MatchModel;
use App\Models\DashboardModel;


class Dashboard extends BaseController
{
    // for spectator to select matches
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('matches');
        $builder->select('
            matches.id,
            matches.match_name,
            matches.team1_id,
            team1.team_name as t1,
            org1.logo_path as logo1,
            matches.team2_id,
            team2.team_name as t2,
            org2.logo_path as logo2,
            matches.round,
            matches.match_category,
            matches.game1_score1,
            matches.game1_score2,
            matches.game2_score1,
            matches.game2_score2,
            matches.game3_score1,
            matches.game3_score2,
            matches.current_game,
            matches.match_status,
            matches.start_time,
            matches.end_time,
            matches.court_number,
            matches.updated_at,
        ')->where('matches.match_status', 'ongoing');
        $builder->join('teams as team1', 'matches.team1_id = team1.id', 'left');
        $builder->join('teams as team2', 'matches.team2_id = team2.id', 'left');

        $builder->join('organizations as org1', 'team1.organization_id = org1.id', 'left');
        $builder->join('organizations as org2', 'team2.organization_id = org2.id', 'left');

        $query = $builder->get();

        $data = [
            'match_ongoing' => $query->getResultArray(),
        ];

        echo view('dashboard/header');
        echo view('dashboard/index', $data);
        echo view('dashboard/footer');
    }

    public function pageDashboardControl()
    {
        $dashboardModel = new DashboardModel();

        $data = [
            'dashboard' => $dashboardModel->find(1),
        ];

        echo view('dashboard/header');
        echo view('dashboard/control', $data);
        echo view('dashboard/footer');
    }

    public function postDashboardUpdate()
    {
        if ($this->request->getMethod() === 'POST')
        {
            $court_1 = $this->request->getPost('court_1');
            $court_2 = $this->request->getPost('court_2');
            $court_3 = $this->request->getPost('court_3');
            $court_4 = $this->request->getPost('court_4');

            $dashboardModel = new DashboardModel();

            $data = [
                'court_1' => $court_1,
                'court_2' => $court_2,
                'court_3' => $court_3,
                'court_4' => $court_4,
            ];

            $dashboardModel->update(1, $data);

            return redirect()->to('/livescore');
        }
    }

    public function getLivescore()
    {

        $dashboardModel = new DashboardModel();

        $dashboardData = $dashboardModel->find(1);

        $match1 = $dashboardData['court_1'];
        $match2 = $dashboardData['court_2'];
        $match3 = $dashboardData['court_3'];
        $match4 = $dashboardData['court_4'];

        $data = [
            'court_1' => $this->livescoreCourt($match1),
            'court_2' => $this->livescoreCourt($match2),
            'court_3' => $this->livescoreCourt($match3),
            'court_4' => $this->livescoreCourt($match4),
        ];

        return $this->response->setJSON($data);
    }

    public function pageDashboard1()
    {
        echo view('dashboard/header');
        echo view('dashboard/test');
        echo view('dashboard/footer');
    }

    public function getUpcoming()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('matches');
        $builder->select('
            matches.id,
            matches.match_name,
            matches.team1_id,
            team1.team_name as t1,
            player1team1.name as player1team1,
            player2team1.name as player2team1,
            org1.logo_path as logo1,
            matches.team2_id,
            team2.team_name as t2,
            player1team2.name as player1team2,
            player2team2.name as player2team2,
            org2.logo_path as logo2,
            matches.round,
            matches.match_category,
            matches.game1_score1,
            matches.game1_score2,
            matches.game2_score1,
            matches.game2_score2,
            matches.game3_score1,
            matches.game3_score2,
            matches.current_game,
            matches.match_status,
            matches.start_time,
            matches.end_time,
            matches.court_number,
            matches.updated_at,
        ');
        $builder->join('teams as team1', 'matches.team1_id = team1.id', 'left');
        $builder->join('teams as team2', 'matches.team2_id = team2.id', 'left');

        $builder->join('organizations as org1', 'team1.organization_id = org1.id', 'left');
        $builder->join('organizations as org2', 'team2.organization_id = org2.id', 'left');

        $builder->join('players as player1team1', 'team1.player1 = player1team1.id', 'left');
        $builder->join('players as player2team1', 'team1.player2 = player2team1.id', 'left');
        $builder->join('players as player1team2', 'team2.player1 = player1team2.id', 'left');
        $builder->join('players as player2team2', 'team2.player2 = player2team2.id', 'left');

        $builder->where('match_status', 'upcoming');

        $query = $builder->get();

        $data = [
            'upcoming' => $query->getResultArray(),
        ];

        return $this->response->setJSON($data);
    }

    private function livescoreCourt($match_id)
    {
        if (!empty($match_id) ) {
            $db = \Config\Database::connect();
            $builder = $db->table('matches');
            $builder->select('
                matches.id,
                matches.match_name,
                matches.team1_id,
                team1.team_name as t1,
                player1team1.name as player1team1,
                player2team1.name as player2team1,
                org1.logo_path as logo1,
                matches.team2_id,
                team2.team_name as t2,
                player1team2.name as player1team2,
                player2team2.name as player2team2,
                org2.logo_path as logo2,
                matches.round,
                matches.match_category,
                matches.game1_score1,
                matches.game1_score2,
                matches.game2_score1,
                matches.game2_score2,
                matches.game3_score1,
                matches.game3_score2,
                matches.current_game,
                matches.match_status,
                matches.start_time,
                matches.end_time,
                matches.court_number,
                matches.updated_at,
            ')->where('matches.id', $match_id);
            $builder->join('teams as team1', 'matches.team1_id = team1.id', 'left');
            $builder->join('teams as team2', 'matches.team2_id = team2.id', 'left');

            $builder->join('organizations as org1', 'team1.organization_id = org1.id', 'left');
            $builder->join('organizations as org2', 'team2.organization_id = org2.id', 'left');

            $builder->join('players as player1team1', 'team1.player1 = player1team1.id', 'left');
            $builder->join('players as player2team1', 'team1.player2 = player2team1.id', 'left');
            $builder->join('players as player1team2', 'team2.player1 = player1team2.id', 'left');
            $builder->join('players as player2team2', 'team2.player2 = player2team2.id', 'left');

            $query = $builder->get();

            return $query->getResultArray()[0];
        } else {
            return [];
        }


    }
}
