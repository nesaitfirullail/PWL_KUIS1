<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function index()
    {
        return view('kuis.home');
    }
    public function pegawai()
    {
        return view('kuis.pegawai');
    }
    
    public function promotion()
    {
        return view('kuis.promotion');
    }
    public function contactus()
    {
        return view('kuis.contact-us');
    }
    
}