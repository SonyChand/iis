<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Travel';
        $travels = Travel::latest()->get();
        return view('travels.index', compact('travels', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data Travel';
        return view('travels.create', compact('title'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('travels', 'public');
        }

        Travel::create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath
        ]);

        return redirect()->route('travels.index')->with('success', 'Travel berhasil ditambahkan.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        $title = 'Edit Data Travel';
        return view('travels.edit', compact('travel', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travel $travel)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($travel->image) {
                Storage::disk('public')->delete($travel->image);
            }
            $imagePath = $request->file('image')->store('travels', 'public');
            $travel->image = $imagePath;
        }

        $travel->update([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $travel->image
        ]);

        return redirect()->route('travels.index')->with('success', 'Travel berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        $travel->delete();
        return redirect()->route('travels.index')->with('success', 'Data travel berhasil dihapus!');
    }
}
