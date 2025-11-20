<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        // 1. Controller menyiapkan data
        $namaPengguna = "Budi";
        // 2. Controller mengirim data ke View 'salam'
        // 'nama_di_view' adalah nama variabel yang akan dipakai diBlade
        // $namaPengguna adalah data yang kita kirim
        return view('salam', ['nama_di_view' => $namaPengguna]);
    }
}
