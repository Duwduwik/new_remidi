<?php

namespace App\Http\Controllers;

use App\Models\TeamMember; // Import Model yang baru dibuat
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman About Us dengan data tim.
     */
    public function showAbout()
    {
        // Panggil data dari Model
        $team = TeamMember::getAll();

        return view('about', compact('team'));
    }
}