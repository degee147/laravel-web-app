<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function showWelcome()
    {


        $users = new My_Users();

        $users->title = 'Do No Wrong';
        $users->artist = 'D. DoRight';
        $users->year = 2014;
        $users->save();


        return view('users');
    }
}
