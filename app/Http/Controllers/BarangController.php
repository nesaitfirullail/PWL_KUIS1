<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    $data = Barang::all();
    return view('barang', ['barang' => $data]);
}
