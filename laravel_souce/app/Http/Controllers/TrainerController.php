<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Companies;
use App\Models\trainers;

class TrainerController extends Controller
{
    public function trainers() {
        $TrainerObj =  new trainers();
        $trainer = $TrainerObj->all();
        $trainer = $TrainerObj->paginate(25);
        return view('trainer',['trainers' => $trainer]);
    }
}
