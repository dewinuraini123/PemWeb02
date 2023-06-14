<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index()
    {
        $tipeData = TipeMobil::get();
        return view('pages.tipe_mobil.index',['tipeData' => $tipeData]);
    }
    function create()
    {
        return view('pages.tipe_mobil.create');
    }

    function store(Request $request)
    {
        $tipeData = new TipeMobil;
        $tipeData->tipe = $request->tipe;
        $tipeData->save();

        return redirect()->to('/tipe_mobil')->with('success','Data berhasil disimpan');
    }

    function edit($id)
    {
        $tipeData = TipeMobil::find($id);
        return view('pages.tipe_mobil.edit',['tipeData'=> $tipeData]);
    }

    function update($id, Request $request)
    {
        $tipeData = TipeMobil::find($id);
        $tipeData->tipe = $request->tipe;
        $tipeData->save();

        return redirect()->to('/tipe_mobil')->with('success', 'Data berhasil diubah');
    }
    function delete($id)
    {
        $tipeData = TipeMobil::find($id);
        $tipeData->delete();

        return redirect()->to('/tipe_mobil')->with('success','Data tipe berhasil dihapus');
    }

}
