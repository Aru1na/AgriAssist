<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class distController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function read()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }

    public function postRequestView()
    {
        return view('distributorPage.dashboard');
    }

    public function notificationView()
    {
        return view('distributorPage.notification');
    }

    public function historyView()
    {
        return view('distributorPage.History');
    }

    public function aboutView()
    {
        return view('distributorPage.about');
    }
}
