<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('kuis.pegawai', ['peg' => $data]);
    }
}
