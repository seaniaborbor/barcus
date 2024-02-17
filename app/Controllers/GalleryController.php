<?php

namespace App\Controllers;

class GalleryController extends BaseController
{
    public function index()
    {
        return view('dashboard/gallery');
    }
}
