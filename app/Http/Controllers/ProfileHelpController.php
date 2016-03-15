<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProfileHelpController extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function showWelcome(){
        return view('profile_help');
    }
}
