<?php

namespace App\Http\Controllers;

use App\Models\AreaSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use the query builder to select all users
        $data = DB::table('table_c')->get();

        // Pass the users data to a view
        return view('AreaSales.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AreaSales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->collect();

        DB::table('table_c')
            ->insert([
                'kode_toko'=>$data['kode_toko'],
                'area_sales'=>$data['area_sales'],

            ]);
        return redirect()->route('areasales.index')->with('status', 'Success!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AreaSales $areaSales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AreaSales $areaSales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AreaSales $areaSales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaSales $areaSales)
    {
        DB::table('table_c')
            ->where('kode_toko', $areaSales['kode_toko'])
            ->delete();

        return redirect()->route('areasales.index')->with('status', 'Success!!');
    }
}