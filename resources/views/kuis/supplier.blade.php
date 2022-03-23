@extends('layouts.master')

@include('header')

<div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Daftar Supplier</h3>
                </div>
            </div>
        </div>
    </div>
    

    <div>
        <table class="table table-supplier">
            <thead>
                <tr>
                    <th>ID Supplier</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sup as $s)
                    <tr>
                        <td>{{$s ->id_supplier}}</td>
                        <td>{{$s ->nama}}</td>
                        <td>{{$s ->nomor_telepon}}</td>
                        <td>{{$s ->alamat}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">
        .
    </div>
    
      
    @include('footer')