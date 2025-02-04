<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Employee::all(); // Mendapatkan semua data pegawai
        return view('pegawai.index', compact('pegawai')); // Mengirim data ke view

    }
    public function create()
    {
        return view('pegawai.create');
    }
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:18',
            'position' => 'required|string|max:255',
            'departement' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'join_date' => 'required|date',
        ]);

        // Menyimpan data pegawai
        Employee::create($validated);

        // Redirect ke halaman data pegawai
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }
    public function edit($id)
    {
        // Mengambil data pegawai berdasarkan ID
        $pegawai = Employee::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:18',
            'position' => 'required|string|max:255',
            'departement' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'join_date' => 'required|date',
        ]);

        // Menemukan pegawai yang akan diupdate
        $pegawai = Employee::findOrFail($id);
        // Memperbarui data pegawai
        $pegawai->update($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui');
    }
    public function destroy($id)
    {
        // Menemukan pegawai yang akan dihapus
        $pegawai = Employee::findOrFail($id);
        // Menghapus data pegawai
        $pegawai->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
}
