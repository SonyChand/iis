<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class HomeController extends Controller
{
    // Menampilkan halaman utama dengan daftar travel
    public function index()
    {
        $travels = Travel::latest()->paginate(6); // Ambil travel terbaru dengan pagination
        return view('home.index', compact('travels'));
    }

    // Menampilkan halaman detail travel
    public function show($id)
    {
        $travel = Travel::findOrFail($id); // Ambil data berdasarkan ID atau 404 jika tidak ditemukan
        return view('home.detail', compact('travel'));
    }
}
