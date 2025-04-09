<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vendorController extends Controller
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

    public function resupplyRequestView()
    {
        return view('vendorPage.dashboard');
    }

    public function notificationView()
    {
        return view('vendorPage.notification');
    }

    public function historyView()
    {
        return view('vendorPage.History');
    }

    public function aboutView()
    {
        return view('vendorPage.about');
    }
}
