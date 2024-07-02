<?php

namespace App\Http\Controllers;

use App\Models\PagiA;
use Illuminate\Http\Request;

class PagiAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArray = array();
        $pagiA = PagiA::all();
        foreach ($pagiA as $index => $data) {
            $dataArray[$index]['id_mhs'] = $data->id;
            $dataArray[$index]['nama_mhs'] = $data->nama;
            $dataArray[$index]['jurusan_mhs'] = $data->jurusan;
        }

        echo '<prev>';
        echo print_r($dataArray);
        echo '</prev>';
        exit();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PagiA $pagiA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PagiA $pagiA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PagiA $pagiA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PagiA $pagiA)
    {
        //
    }
}
