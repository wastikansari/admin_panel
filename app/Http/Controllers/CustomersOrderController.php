<?php

namespace App\Http\Controllers;

use App\Models\CustomersOrder;
use Illuminate\Http\Request;

class CustomersOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Order";
        $orders = CustomersOrder::all()->sortByDesc("createdAt");
        $compact = compact('title', 'orders');
        return view('admin.order.list', $compact);
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
     * @param  \App\Models\CustomersOrder  $customersOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CustomersOrder $customersOrder)
    {
        $title = "Order";
        return view('admin.order.view', compact('customersOrder', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomersOrder  $customersOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomersOrder $customersOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomersOrder  $customersOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomersOrder $customersOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomersOrder  $customersOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomersOrder $customersOrder)
    {
        //
    }
}
