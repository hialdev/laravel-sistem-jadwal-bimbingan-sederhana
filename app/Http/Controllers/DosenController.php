<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
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
        return view('dosen.create');
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
            'nama' => 'required',
            'nidn' => 'min:5|max:10|required|unique:dosens,nidn',
            'alamat' => 'required',
            'kontak' => 'required',
        ]);

        $dosen = Dosen::create([
            'nama' => $request->nama,
            'nidn' => $request->nidn,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
        ]);

        if ($dosen) {
            return redirect()
                ->route('dosen.index')
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
        $dosen = Dosen::findOrFail($id);

        return view('dosen.show',compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
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
            'nama' => 'required',
            'nidn' => 'min:5|max:10|required',
            'alamat' => 'required',
            'kontak' => 'required',
        ]);
        $dosen = Dosen::findOrFail($id);
        $dosen->update([
            'nama' => $request->nama,
            'nidn' => $request->nidn,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
        ]);

        if ($dosen) {
            return redirect()
                ->route('dosen.index')
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
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        if ($dosen) {
            return redirect()
                ->route('dosen.index')
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
