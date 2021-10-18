<?php

namespace App\Http\Controllers;
use App\Models\kontenVidio;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KontenVidioController extends Controller
{
    public function index()
    {
        
        $kontenVidio = KontenVidio::all();
        return view('admin.kontenVidio.index', compact('kontenVidio'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('admin.kontenVidio.addvidio',compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'bab' => 'required',
            'id_kelas' => 'required',
        ]);
        KontenVidio::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'bab' => $request->bab,
            'id_kelas' => $request->id_kelas,
        ]);
        return redirect()->route('kontenVidio.index')
            ->with('success', 'kontenVidio Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $kontenVidios = KontenVidio::where('id', $id)->first();
        return view('admin.kontenVidio.show', compact('kontenVidio'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $kontenVidio = KontenVidio::find($id);
        $kelas = Kelas::all();
        return view('admin.kontenVidio.editvidio', compact('kontenVidio','kelas'));
    }

    public function update(Request $request, $id)
    {
        $kontenVidio = KontenVidio::findOrFail($id);
        $kontenVidio->judul = $request->judul;
        $kontenVidio->deskripsi = $request->deskripsi;
        $kontenVidio->link = $request->link;
        $kontenVidio->bab = $request->bab;
        $kontenVidio->id_kelas = $request->id_kelas;
        $kontenVidio->save();

        return redirect()->route('kontenVidio.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        KontenVidio::where('id', $id)->delete();

        return redirect()->route('kontenVidio.index')
            ->with('delete', 'kontenVidio Berhasil Dihapus');
    }
}
