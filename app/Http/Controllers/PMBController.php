<?php

namespace App\Http\Controllers;

use App\PMB;
use Illuminate\Http\Request;

class PMBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return PMB::all();
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

        $path = public_path() . "/pmb_docs";

        $ijazah = $request->file('ijazah');
        $ijazah->move($path, $ijazah->getClientOriginalName());

        $rapor = $request->file('rapor');
        $rapor->move($path, $rapor->getClientOriginalName());

        $suratPernyataan = $request->file('suratPernyataan');
        $suratPernyataan->move($path, $suratPernyataan->getClientOriginalName());

        $pmb = new PMB();

        $pmb->nama = $request->nama;
        $pmb->jenisKelamin = $request->jenisKelamin;
        $pmb->alamat = $request->alamat;
        $pmb->noTelp = $request->noTelp;
        $pmb->email = $request->email;
        $pmb->password = $request->password;
        $pmb->tempat = $request->tempat;
        $pmb->tanggalLahir = $request->tanggalLahir;
        $pmb->asalSekolah = $request->asalSekolah;
        $pmb->kota = $request->kota;
        $pmb->jurusan = $request->jurusan;
        $pmb->ijazah = $ijazah->getClientOriginalName();
        $pmb->rapor = $rapor->getClientOriginalName();
        $pmb->suratPernyataan = $suratPernyataan->getClientOriginalName();


        $pmb->save();

        return response()->json([
            'msg' => '1 Data Recored'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PMB  $pMB
     * @return \Illuminate\Http\Response
     */
    public function show(PMB $pMB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PMB  $pMB
     * @return \Illuminate\Http\Response
     */
    public function edit(PMB $pMB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PMB  $pMB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pmb = PMB::findOrFail($id);

        $path = public_path() . "/pmb_docs";

        $ijazah = $request->file('ijazah');
        $ijazah->move($path, $ijazah->getClientOriginalName());

        $rapor = $request->file('rapor');
        $rapor->move($path, $rapor->getClientOriginalName());

        $suratPernyataan = $request->file('suratPernyataan');
        $suratPernyataan->move($path, $suratPernyataan->getClientOriginalName());

        $pmb = new PMB();

        $pmb->nama = $request->nama;
        $pmb->jenisKelamin = $request->jenisKelamin;
        $pmb->alamat = $request->alamat;
        $pmb->noTelp = $request->noTelp;
        $pmb->email = $request->email;
        $pmb->password = $request->password;
        $pmb->tempat = $request->tempat;
        $pmb->tanggalLahir = $request->tanggalLahir;
        $pmb->asalSekolah = $request->asalSekolah;
        $pmb->kota = $request->kota;
        $pmb->jurusan = $request->jurusan;
        $pmb->ijazah = $ijazah->getClientOriginalName();
        $pmb->rapor = $rapor->getClientOriginalName();
        $pmb->suratPernyataan = $suratPernyataan->getClientOriginalName();


        $pmb->save();

        return response()->json([
            'msg' => '1 Data Recored'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PMB  $pMB
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        PMB::findOrFail($id)->delete();
        return '1 Data Deleted';
    }
}
