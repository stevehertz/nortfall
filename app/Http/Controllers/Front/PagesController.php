<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        # code...
        $page_title = "Home";
        return view('front.index', [
            'page_title' => $page_title
        ]);
    }
}
