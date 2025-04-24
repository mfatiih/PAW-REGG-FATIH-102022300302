<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = (object) [ 
            'nama' => 'Muhammad Fatih',
            'nim' => '102022300302',
            'email' => 'muhfatih143@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'Fakultas' => 'FRI',
            'foto' => 'images/aing.png' ,    // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        ];

        return view ('profil', ['mahasiswa' => $mahasiswa]);
    }
}
