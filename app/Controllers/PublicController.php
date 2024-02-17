<?php

namespace App\Controllers;

class PublicController extends BaseController
{
    public function index()
    {
        return view('public/index');
    }
}
