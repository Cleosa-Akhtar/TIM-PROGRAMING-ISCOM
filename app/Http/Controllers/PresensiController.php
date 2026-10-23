<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function index()
    {
        $presensis = Presensi::orderBy('id', 'asc')->get();
        return view('presensi.index', compact('presensis'));
    }

    public function create()
    {
        return view('presensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'mata_kuliah' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu_hadir' => 'required',
            'status' => 'required|string',
        ]);

        Presensi::create($request->all());

        return redirect()->route('presensi.index');
    }

    public function edit($id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('presensi.edit', compact('presensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'npm' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'mata_kuliah' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu_hadir' => 'required',
            'status' => 'required|string',
        ]);

        $presensi = Presensi::findOrFail($id);
        $presensi->update($request->all());

        return redirect()->route('presensi.index');
    }

    public function destroy($id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->delete();

        return redirect()->route('presensi.index');
    }
}