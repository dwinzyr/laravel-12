<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use App\Models\Peran;
use App\Models\User;
use App\Http\Requests\StoreKritikRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateKritikRequest;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kritiks = Kritik::select('comment','rating','user_id','film_id')->get();
        return view('components.movies', compact('kritiks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('kritik.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKritikRequest $request, Kritik $kritik) 
    {

        $kritik->create($request->all());
        return redirect()->route('kritik.index')
        ->with(['success' => 'Data telah di simpan']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKritikRequest $request, Kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kritik $kritik)
    {
        //
    }
}
