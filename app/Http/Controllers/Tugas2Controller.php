<?php

namespace App\Http\Controllers;

use App\Models\Tugas_2;
use Illuminate\Http\Request;

class Tugas2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArray = array();
        $Tugas_2 = Tugas_2::all();
        foreach ($Tugas_2 as $index => $data) {
            $dataArray[$index]['id_mhs'] = $data->id;
            $dataArray[$index]['nama_mhs'] = $data->nama;
            $dataArray[$index]['nim_mhs'] = $data->nim;
            $dataArray[$index]['matakuliah'] = $data->matakuliah;
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
    public function show(Tugas_2 $tugas_2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tugas_2 $tugas_2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tugas_2 $tugas_2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tugas_2 $tugas_2)
    {
        //
    }
}
