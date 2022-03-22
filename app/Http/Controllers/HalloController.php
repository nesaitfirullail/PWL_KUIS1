<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function index()
    {
        return view('minggu3.home');
    }
    public function product()
    {
        return view('minggu3.product');
    }
    
    public function promotion()
    {
        return view('minggu3.promotion');
    }
    public function contactus()
    {
        return view('minggu3.contact-us');
    }
    
}