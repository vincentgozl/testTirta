<?php

namespace App\Http\Controllers;

use App\Exports\TransaksiExport;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use the query builder to select all users
        $data = DB::table('table_b')->get();

        // Pass the users data to a view
        return view('Transaksi.index', ['data' => $data]);
    }

    public function generatePDF()
    {
        $pdf = PDF::loadView('pdf.transaksi');

        return $pdf->download('transaksi.pdf');
    }

    public function exportTransaksi()
    {
        return Excel::download(new TransaksiExport, 'Transaksi.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->collect();

        DB::table('table_b')
            ->insert([
                'kode_toko' => $data['kode_toko'],
                'nominal_transaksi' => $data['nominal_transaksi'],

            ]);
        return redirect()->route('transaksi.index')->with('status', 'Success!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        return view('Transaksi.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $data = $request->collect();

        DB::table('table_b')
            ->where('kode_toko', $transaksi['kode_toko'])
            ->update([
                'kode_toko' => $data['kode_toko'],
                'nominal_transaksi' => $data['nominal_transaksi'],
            ]);
            
        return redirect()->route('transaksi.index')->with('status', 'Success!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        DB::table('table_b')
            ->where('kode_toko', $transaksi['kode_toko'])
            ->delete();

        return redirect()->route('transaksi.index')->with('status', 'Success!!');
    }
}