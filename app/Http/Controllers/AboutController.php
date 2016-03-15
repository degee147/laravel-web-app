<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AboutController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function showWelcome()
    {
        return view('about', array('Location' => 'PHC'));
    }

    public function showSubject($theSubject)
    {
        $theLandmarks = array("Liberation Stadium","Eagle Square","Tinapa","Ogbudu Ranch");
        return view('about', array('Location' => $theSubject, 'Weather' => 'sunny', 'theLandmarks' => $theLandmarks));
    }


}

