<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        if (!empty($keyword)) {
            $mahasiswas = Mahasiswa::where('nim', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('jurusan', 'LIKE', "%$keyword%")
                ->orWhere('no_handphone', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_lahir', 'LIKE', "%$keyword%")
                ->with('kelas')->paginate(3);
            $paginate = Mahasiswa::orderBy('nim', 'asc')->paginate(3);
        } else {
            $mahasiswas = Mahasiswa::with('kelas')->paginate(3);
            $paginate = Mahasiswa::orderBy('nim', 'asc')->paginate(3);
        }

        return view('mahasiswas.index', ['mahasiswas' => $mahasiswas, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswas.create', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->kelas_id = $request->get('kelas_id');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->save();

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($nim)
    {
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        return view('mahasiswas.detail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nim)
    {
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $kelas = Kelas::all();
        return view('mahasiswas.edit', compact('Mahasiswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->kelas_id = $request->get('kelas_id');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->save();

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa Berhasil Diupdate');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nim)
    {
        Mahasiswa::find($nim)->delete();
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
