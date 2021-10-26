<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $dosens = Dosen::all();
        $jadwals = Jadwal::all();

        return view('index',compact('mahasiswas','dosens','jadwals'));
    }

}
