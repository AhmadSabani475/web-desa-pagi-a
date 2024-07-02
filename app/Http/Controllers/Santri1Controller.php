<?php

namespace App\Http\Controllers;

use App\Models\santri_1;
use Illuminate\Http\Request;
use illuminate\view\View;
use illuminate\Http\RedirectResponse;

class Santri1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dataArray = santri_1::latest()->paginate(20);
        return view('home', compact('dataArray'));
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
    public function show(santri_1 $santri_1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(santri_1 $santri_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, santri_1 $santri_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(santri_1 $santri_1)
    {
        //
    }
}
