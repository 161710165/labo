<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laboratoriums;
class LaboratoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $laboratoriums = laboratoriums::all();
        return View('laboratorium.index',compact('laboratoriums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laboratorium.create');
           }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'pilih' => 'required|max:255',
            'no_registrasi' => 'required|max:255',
            'no_order' => 'required|max:255',
            'tgl_order' => 'required|min:3',
            'tgl_sampling' => 'required|min:3',
            'perujuk' => 'required|min:3',
            'parameter' => 'required|min:3'

            ]);

        $laboratoriums = new laboratorium;
        $laboratoriums->pilih = $request->pilih;
        $laboratoriums->no_registrasi = $request->no_registrasi;
        $laboratoriums->no_order = $request->no_order;
        $laboratoriums->jenis_buku = $request->jenis_buku;
        $laboratoriums->tgl_order = $request->tgl_order;
        $laboratoriums->tgl_sampling = $request->tgl_sampling;
        $laboratoriums->perujuk = $request->perujuk;
        $laboratoriums->parameter = $request->parameter;
        // dd($laboratoriums);
        $laboratoriums->save();
        return redirect()->route('laboratorium.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
