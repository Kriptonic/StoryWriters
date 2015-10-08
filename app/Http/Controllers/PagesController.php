<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function getHome()
    {
        return view('pages.home', [
            'nav' => 'Home'
        ]);
    }

    public function getAbout()
    {
        return view('pages.about', [
            'nav' => 'About'
        ]);
    }

}