<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Berita::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $path = public_path()."/news_img";

        $file = $request->file('news_img');
        $file->move($path,$file->getClientOriginalName());

        $berita = new Berita();
        $berita->news_img = $file->getClientOriginalName();        
        $berita->judul_berita = $request->judul_berita;
        $berita->sub_judul = $request->sub_judul;
        $berita->isi_berita = $request->isi_berita;

        $berita->save();
        return response()->json([
            'msg' => 'News Added !',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $path = public_path()."/news_img";

        $file = $request->file('news_img');
        $file->move($path,$file->getClientOriginalName());

        $berita = Berita::findOrFail($id);
        $berita->news_img = $file->getClientOriginalName();        
        $berita->judul_berita = $request->judul_berita;
        $berita->sub_judul = $request->sub_judul;
        $berita->isi_berita = $request->isi_berita;

        $berita->save();
        return response()->json([
            'msg' => 'News Updated !',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Berita::findOrFail($id)->delete();
        return response()->json([
            'msg' => 'News Deleted !',
        ]);
    }

    public function spesificNews($id)
    {
        return Berita::where('id',$id)->first();
    }
}
