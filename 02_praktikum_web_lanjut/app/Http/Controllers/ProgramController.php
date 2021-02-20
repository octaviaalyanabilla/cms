<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return '<a href="https://www.educastudio.com/program/karir">Karir</a>';
    }
    public function magang()
    {
        return '<a href="https://www.educastudio.com/program/magang">Magang</a>';
    }
    public function kunjungan_industri()
    {
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri</a>';
    }
}
