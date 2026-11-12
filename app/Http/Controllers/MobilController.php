<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobils.index', compact('mobils'));
    }

    public function create()
    {
        return view('mobils.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'plat' => 'required',
            'warna' => 'required',
            'harga_sewa' => 'required|numeric',
            'status' => 'required',
        ]);

        Mobil::create($request->all());
        return redirect()->route('mobils.index');
    }

    public function edit(Mobil $mobil)
    {
        return view('mobils.edit', compact('mobil'));
    }

    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'merk' => 'required',
            'plat' => 'required',
            'warna' => 'required',
            'harga_sewa' => 'required|numeric',
            'status' => 'required',
        ]);

        $mobil->update($request->all());
        return redirect()->route('mobils.index');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();
        return redirect()->route('mobils.index');
    }
}