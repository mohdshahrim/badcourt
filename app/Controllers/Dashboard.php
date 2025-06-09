<?php

namespace App\Controllers;

use App\Models\TeamModel;
use App\Models\MatchModel;

class Dashboard extends BaseController
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
}
