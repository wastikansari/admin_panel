<?php

namespace App\Http\Controllers;

use App\Models\StafLogin;
use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StafLogin  $stafLogin
     * @return \Illuminate\Http\Response
     */
    public function show(StafLogin $stafLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StafLogin  $stafLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(StafLogin $stafLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StafLogin  $stafLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StafLogin $stafLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StafLogin  $stafLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(StafLogin $stafLogin)
    {
        //
    }

    public function createInvoice() {
        $title = "Invoice";
        return view('admin.invoice.create', compact('title'));
    }

    public function generateInvoice(Request $request) {
        // dd($request->all());
        $pdf = PDF::loadView('admin.invoice.pdf', $request->all());
        return $pdf->download('Invoice.pdf');
    }

    public function viewInvoice() {
        $pdf = PDF::loadView('admin.invoice.pdf');
        return $pdf->download('itsolutionstuff.pdf');
        return view('admin.invoice.pdf');
    }
}
