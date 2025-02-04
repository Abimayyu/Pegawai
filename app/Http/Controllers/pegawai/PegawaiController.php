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
        $employee = Employee::create($validated);
        if ($employee) {
            toast('Berhasil menambahkan data', 'success');
            return redirect()->route('pegawai.index');
        } else {
            toast('Gagal menambahkan data', 'error');
            return redirect()->back()->withInput();
        }

        // Redirect ke halaman data pegawai
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
        if ($pegawai) {
            toast('Berhasil edit data', 'success');
            return redirect()->route('pegawai.index');
        } else {
            toast('Gagal edit data', 'error');
            return redirect()->back()->withInput();
        }
        // Redirect kembali dengan pesan sukses
    }
    public function destroy($id)
    {
        // Menemukan pegawai yang akan dihapus
        $pegawai = Employee::findOrFail($id);
        // Menghapus data pegawai
        $pegawai->delete();
        toast('Berhasil menghapus data', 'success');
        // Redirect kembali dengan pesan sukses
        return redirect()->route('pegawai.index');
    }
}
