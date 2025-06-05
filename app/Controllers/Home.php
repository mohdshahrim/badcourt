<?php

namespace App\Controllers;
use App\Models\SetupModel;
use App\Models\MatchModel;

class Home extends BaseController
{
    public function index()
    {
        $setupModel = new SetupModel();
        $matchModel = new MatchModel();

        $data = [
            'event' => $setupModel->find(1),
            'match_ongoing' => $matchModel->where('match_status', 'ongoing')->findAll(),
            'match_upcoming' => $matchModel->where('match_status', 'upcoming')->findAll(),
            'match_completed' => $matchModel->where('match_status', 'completed')->findAll(),
        ];

        echo view('home/header');
        echo view('home/index', $data);
        echo view('home/footer');
    }
}
