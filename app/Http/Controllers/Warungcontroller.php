<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class WarungController extends Controller
{
    public function home(){
        $warungs = Warung::data();
        
        return view('home', compact('warungs'));
    }
}