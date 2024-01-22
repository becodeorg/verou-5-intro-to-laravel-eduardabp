<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomepageController extends Controller 
{
    public function index ()
    {
        return view('welcome');
    }
}