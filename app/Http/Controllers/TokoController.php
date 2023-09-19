<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use the query builder to select all users
        $data = DB::table('table_a')->get();

        // Pass the users data to a view
        return view('Toko.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Toko.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->collect();

        DB::table('table_a')
            ->insert([
                'kode_toko_baru'=>$data['kode_toko_baru'],
                'kode_toko_lama'=>$data['kode_toko_lama'],

            ]);
        return redirect()->route('toko.index')->with('status', 'Success!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toko $toko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toko $toko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toko $toko)
    {
        DB::table('table_a')
            ->where('kode_toko_baru', $toko['kode_toko_baru'])
            ->delete();

        return redirect()->route('toko.index')->with('status', 'Success!!');
    }
}