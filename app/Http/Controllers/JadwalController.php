<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mahasiswa_id' => 'required',
            'dosen_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ]);

        $jadwal = jadwal::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'dosen_id' => $request->dosen_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'awal' => $request->awal,
            'akhir' => $request->akhir,
        ]);

        if ($jadwal) {
            return redirect()
                ->route('jadwal.index')
                ->with([
                    'success' => 'Hore, Data berhasil ditambahkan!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Harap masukan data dengan benar'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        return view('jadwal.show',compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'mahasiswa_id' => 'required',
            'dosen_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'awal' => 'required',
            'akhir' => 'required',
        ]);
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update([
            'mahasiswa_id' => $request->mahasiswa_id,
            'dosen_id' => $request->dosen_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'awal' => $request->awal,
            'akhir' => $request->akhir,
        ]);

        if ($jadwal) {
            return redirect()
                ->route('jadwal.index')
                ->with([
                    'success' => 'Hore, Data Telah Terupdate!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Harap update data dengan benar'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        if ($jadwal) {
            return redirect()
                ->route('jadwal.index')
                ->with([
                    'success' => 'Data berhasil dihapus!'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Harap update data dengan benar'
                ]);
        }
    }
}
