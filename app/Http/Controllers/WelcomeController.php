<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Test;

class WelcomeController extends Controller
{
    public function index(){
    	return view('welcome')->withTests(Test::all());
    	/* $arrayvar = [
            'number1'=>'karl',
            'number2'=>'badge',
            'number3'=>'meettry'
        ];*/
        /* $first = 'karl';
    	$last = 'song';
    	return view('welcome',compact('first'));*/
    }
}
