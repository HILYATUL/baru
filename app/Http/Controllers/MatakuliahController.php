<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = matakuliah::orderby('id')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'matakuliah' => 'required',
            'sks' => 'required',
            'bobot' => 'required',
        ]);
        matakuliah::create($validatedData);
        return redirect('/matakuliah')->with('succes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $matakuliah = matakuliah::findOrfail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matakuliah = matakuliah::findOrfail($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'matakuliah' => 'required',
            'sks' => 'required',
            'bobot' => 'required',

        ]);
        $matakuliah = matakuliah::findOrfail($id);
        $matakuliah->update($validatedData);
        return redirect('/matakuliah')->with('succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $matakuliah = Matakuliah::findOrfail($id);
        $matakuliah->delete();
        return redirect('/matakuliah')->with('succes');
    }
}
