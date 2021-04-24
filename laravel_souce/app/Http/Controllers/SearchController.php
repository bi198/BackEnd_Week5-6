<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Companies;
use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\trainers;

class SearchController extends Controller
{
    public function search(Request $request) {
        $obj =  new trainers();
        $key = $request->get('key');

        if($key){
            $result = $obj->search($key);
            return view('search',['result' => $result]);
        }
        
        return view('search',[]);
    }
}
