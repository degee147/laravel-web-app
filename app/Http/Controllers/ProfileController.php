<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Schema;

class ProfileController extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function showWelcome(){


  //  $users = DB::select('select * from art');

/*
         Schema::create('art', function($newtable)
         {
             $newtable->increments('id');
             $newtable->string('artist');
             $newtable->string('title',500);
             $newtable->text('description');
             $newtable->date('created');
             $newtable->date('exhibition_date');
             $newtable->timestamps();
         });
*/
        return view('profile');
    }
}
