<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use illuminate\View\View;
use illuminate\Http\RedirectResponse;

class CrudController extends Controller
{
    public function index(): view
    {
        $dataArray = Crud::latest()->paginate(10);
        return view('/index', compact('dataArray'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|min:5',
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:10'
        ]);
        Crud::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);
        return redirect()->route('Crud.index')->with(['success' => 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $data = Crud::findOrFail($id);
        return view('Create show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|min:5',
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:10'
        ]);
        $data = Crud::findOrFail($id);
        $data->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);
        return redirect()->route('Crud.index')->with(['success' => 'data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect()->route('Crud.index')->with(['success' => 'data berhasil dihapus']);
    }
}
