<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $surat = Surat::all();
        
        return view('surat.index', ['surat'=>$surat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    
    {
        // Validasi data dari form
        $request->validate([
            'Tujuan_Surat' => 'required|string',
            'Tanggal_Surat' => 'required|date',
            'Nomor_Surat' => 'required|string',
            'Asal_Surat' => 'required|string',
            'Perihal' => 'required|string',
            'Jenis_Surat' => 'required|in:Masuk,Keluar',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

       $foto_file = $request->file('foto');
       $foto_ekstensi = $foto_file->extension();
       $foto_nama = date('ymdhis'). ".".$foto_ekstensi;
       $foto_file->move(public_path('foto'),$foto_nama);


        Surat::create([
            'Tujuan_Surat' => $request->Tujuan_Surat,
            'Tanggal_Surat' => $request->Tanggal_Surat,
            'Nomor_Surat' => $request->Nomor_Surat,
            'Asal_Surat' => $request->Asal_Surat,
            'Perihal' => $request->Perihal,
            'Jenis_Surat' => $request->Jenis_Surat,
            'foto' => $foto_nama,
        ]);

       
        return redirect()->route('surat.index')->with('success', 'Surat Berhasil Ditambahkan');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Surat::where('id',$id)->first();
        return view('surat.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'Tujuan_Surat' => 'required|string',
            'Tanggal_Surat' => 'required|date',
            'Nomor_Surat' => 'required|string',
            'Asal_Surat' => 'required|string',
            'Perihal' => 'required|string',
            'Jenis_Surat' => 'required|in:Masuk,Keluar',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis'). ".".$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data = ([
            'Tujuan_Surat' => $request->Tujuan_Surat,
            'Tanggal_Surat' => $request->Tanggal_Surat,
            'Nomor_Surat' => $request->Nomor_Surat,
            'Asal_Surat' => $request->Asal_Surat,
            'Perihal' => $request->Perihal,
            'Jenis_Surat' => $request->Jenis_Surat,
            'foto' => $foto_nama,
        ]);

        Surat::where('id',$id)->update($data);
        return redirect()->route('surat.index')->with('success', 'Surat Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Surat::where('id',$id)->delete();
        return redirect('surat')->with('success','Surat Berhasil Di Hapus');
    }
}
