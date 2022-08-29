<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = Kategori::all();
        return view('home', compact('data'));
    }
}
