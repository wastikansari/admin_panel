@extends('layouts.admin_app')
@section('after-css')
    <style>
        .order_tbl td{
            font-size: 16px;
        }
    </style>
@endsection
@section('content')
<div class="page-header">
    <h2 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Order Detail [<span class="text-primary">{{$customersOrder->customer->name}}</span>] [<span class="text-primary">{{$customersOrder->order_display_no}}</span>]
    </h2>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover order_tbl">
                    <tr>
                        <td><b>Total Amount:</b> <i class="fa-solid fa-indian-rupee-sign"></i>{{number_format($customersOrder->amount, 2)}}</td>
                        <td><b>Status:</b>
                            @if ($customersOrder->payment_status == 'Unpaid')
                                <span class="text-danger">
                            @elseif ($customersOrder->payment_status == 'Paid')
                                <span class="text-success">
                            @else
                                <span class="text-primary">
                            @endif
                            {{$customersOrder->payment_status}}
                                </span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>ORDER ID:</b> {{$customersOrder->order_display_no}}</td>
                        <td><b>Order Status:</b> {{$customersOrder->ord_status}}</td>
                    </tr>
                    <tr>
                        <td><b>Order Type:</b> {{$customersOrder->order_type}}</td>
                        <td><b>Service Name:</b> {{$customersOrder->service_name}}</td>
                    </tr>
                    <tr>
                        <td><b>Payment Type:</b> {{$customersOrder->payment_type}}</td>
                        <td><b>Payment Status:</b> {{$customersOrder->payment_status}}</td>
                    </tr>
                    <tr>
                        <td><b>Pickup Date:</b> {{$customersOrder->pickup_date}}</td>
                        <td><b>Pickup Time:</b> {{$customersOrder->pickup_time}}</td>
                    </tr>
                    <tr>
                        <td><b>Delivery Date:</b> {{$customersOrder->delivery_date}}</td>
                        <td><b>Delivery Time:</b> {{$customersOrder->delivery_time}}</td>
                    </tr>
                    <tr>
                        <td><b>Pickup Address:</b> {{$customersOrder->pickup_address}}</td>
                        <td><b>Delivery Address:</b> {{$customersOrder->delivery_address}}</td>
                    </tr>
                    <tr>
                        <td><b>Payment Method:</b> {{$customersOrder->payment_method}}</td>
                        <td><b>Delivery Charges:</b> {{$customersOrder->delivery_charges}}</td>
                    </tr>
                    <tr>
                        <td><b>Received On:</b> {{$customersOrder->createdAt}}</td>
                        <td><b>Last Modified On:</b> {{$customersOrder->updatedAt}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h3 class="pb-4">Items :</h3>
                @php
                    $items = json_decode($customersOrder->items_list);
                    // dd($items);
                @endphp
                {{--
                @foreach ($items as $items)
                    {{$items}}
                @endforeach
                --}}
                <table class="table table-striped table-hover order_tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Garment</th>
                            <th>Ordered Qty</th>
                            <th>Rcvd Qty</th>
                            <th>Price</th>
                            <th>Sub Total</th>
                            <th>Received</th>
                        </tr>
                    </thead>
                    <tr>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
