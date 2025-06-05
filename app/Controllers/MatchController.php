<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Controllers\BaseController;
use App\Models\TeamModel;
use App\Models\MatchModel;

class MatchController extends BaseController
{
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
        ');
        $builder->join('teams as team1', 'matches.team1_id = team1.id', 'left');
        $builder->join('teams as team2', 'matches.team2_id = team2.id', 'left');

        $builder->join('organizations as org1', 'team1.organization_id = org1.id', 'left');
        $builder->join('organizations as org2', 'team2.organization_id = org2.id', 'left');

        if (isset($_GET['status'])) {
            $match_status = $this->request->getGet('status');
            $builder->where('match_status', $match_status);
        }

        $query = $builder->get();

        $data = [
            'match' => $query->getResultArray(),
        ];

        echo view('match/header');
        echo view('match/index', $data);
        echo view('match/footer');        
    }

    public function pageMatchNew()
    {
        $teamModel = new TeamModel();

        $data = [
            'team' => $teamModel->findAll(),
        ];

        echo view('match/header');
        echo view('match/match-new', $data);
        echo view('match/footer');
    }

    public function postMatchCreate()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'match_name' => 'required',
        ]))
        {
            $match_name = $this->request->getPost('match_name');
            $team1_id = $this->request->getPost('team1_id');
            $team2_id = $this->request->getPost('team2_id');
            $round = $this->request->getPost('round');
            $start_time = $this->request->getPost('start_time');
            $court_number = $this->request->getPost('court_number');
            $match_category = $this->request->getPost('match_category');

            if (empty(!$start_time)) {
                $start_time = Time::parse($start_time, 'Asia/Kuala_Lumpur')->format('Y-m-d H:i:s');
            } else {
                $start_time = Time::now('Asia/Kuala_Lumpur')->format('Y-m-d H:i:s');
            }

            $data = [
                'match_name' => $match_name,
                'team1_id' => $team1_id,
                'team2_id' => $team2_id,
                'round' => $round,
                'start_time' => $start_time,
                'court_number' => $court_number,
                'match_category' => $match_category,
                'match_status' => "upcoming", //default
                'current_game' => 1, //default
            ];

            $matchModel = new MatchModel();

            if ($matchModel->insert($data)) {
                log_message('error', "hell yeah");
            } else {
                dd($matchModel->getLastQuery());
            }


            $message['status'] = "Success";
            $message['message'] = "Match created. Please manually set match status.";
            $message['id'] = $matchModel->getInsertID();

            echo view('match/header');
            echo view('match/message', $message);
            echo view('match/footer');
        }
    }

    public function pageMatchEdit($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('matches');
        $builder->select('
            matches.id,
            matches.match_name,
            matches.team1_id,
            team1.team_name as team1_name,
            matches.team2_id,
            team2.team_name as team2_name,
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
        ')->where('matches.id', $id);
        $builder->join('teams as team1', 'matches.team1_id = team1.id', 'left');
        $builder->join('teams as team2', 'matches.team2_id = team2.id', 'left');
        $query = $builder->get();

        $teamModel = new TeamModel();
        
        $data = [
            'team' => $teamModel->findAll(),
            'match' => $query->getResultArray()[0],
        ];

        echo view('match/header');
        echo view('match/match-edit', $data);
        echo view('match/footer');
    }

    public function postMatchUpdate()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'id' => 'required',
        ]))
        {
            $id = $this->request->getPost('id');
            $match_name = $this->request->getPost('match_name');
            $team1_id = $this->request->getPost('team1_id');
            $team2_id = $this->request->getPost('team2_id');
            $round = $this->request->getPost('round');
            $match_category = $this->request->getPost('match_category');
            $game1_score1 = $this->request->getPost('game1_score1');
            $game1_score2 = $this->request->getPost('game1_score2');
            $game2_score1 = $this->request->getPost('game2_score1');
            $game2_score2 = $this->request->getPost('game2_score2');
            $game3_score1 = $this->request->getPost('game3_score1');
            $game3_score2 = $this->request->getPost('game3_score2');
            $current_game = $this->request->getPost('current_game');
            $match_status = $this->request->getPost('match_status');
            $start_time = $this->request->getPost('start_time');
            $end_time = $this->request->getPost('end_time');
            $court_number = $this->request->getPost('court_number');

            $data = [
                'match_name' => $match_name,
                'team1_id' => $team1_id,
                'team2_id' => $team2_id,
                'round' => $round,
                'match_category' => $match_category,
                'game1_score1' => $game1_score1,
                'game1_score2' => $game1_score2,
                'game2_score1' => $game2_score1,
                'game2_score2' => $game2_score2,
                'game3_score1' => $game3_score1,
                'game3_score2' => $game3_score2,
                'current_game' => $current_game,
                'match_status' => $match_status,
                'start_time' => $start_time,
                'end_time' => $end_time,
                'court_number' => $court_number,
            ];

            $matchModel = new MatchModel();
            $matchModel->update($id, $data);

            $message['status'] = "Success";
            $message['message'] = "Match updated";
            $message['id'] = $id;

            echo view('match/header');
            echo view('match/message', $message);
            echo view('match/footer');
        }
    }

    public function postMatchDelete()
    {
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'id' => 'required',
        ]))
        {
            $id = $this->request->getPost('id');

            $matchModel = new MatchModel();

            $matchModel->delete($id);

            $message['status'] = "Success";
            $message['message'] = "Match deleted";
            $message['id'] = $id;

            echo view('match/header');
            echo view('match/message', $message);
            echo view('match/footer');
        }
    }
}