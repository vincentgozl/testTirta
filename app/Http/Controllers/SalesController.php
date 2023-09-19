<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use the query builder to select all users
        $data = DB::table('table_d')->get();

        // Pass the users data to a view
        return view('Sales.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->collect();

        DB::table('table_d')
            ->insert([
                'kode_sales' => $data['kode_sales'],
                'nama_sales' => $data['nama_sales'],

            ]);
        return redirect()->route('sales.index')->with('status', 'Success!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        DB::table('table_d')
            ->where('kode_sales', $sales['kode_sales'])
            ->delete();

        return redirect()->route('sales.index')->with('status', 'Success!!');
    }
}