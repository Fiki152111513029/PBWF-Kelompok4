<?php

namespace App\Http\Controllers;

use App\Models\jenis_barang;
use App\Http\Requests\Storejenis_barangRequest;
use App\Http\Requests\Updatejenis_barangRequest;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storejenis_barangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storejenis_barangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenis_barang  $jenis_barang
     * @return \Illuminate\Http\Response
     */
    public function show(jenis_barang $jenis_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenis_barang  $jenis_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(jenis_barang $jenis_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatejenis_barangRequest  $request
     * @param  \App\Models\jenis_barang  $jenis_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Updatejenis_barangRequest $request, jenis_barang $jenis_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenis_barang  $jenis_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenis_barang $jenis_barang)
    {
        //
    }
}
