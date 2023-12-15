@extends('layouts.admin_app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Order List
    </h3>
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
                <table class="table">
                    <thead>
                      <tr>
                        <th>Order No</th>
                        <th>Customer Name</th>
                        <th>Order Type</th>
                        <th>Amount</th>
                        <th>Service Name</th>
                        <th>Item</th>
                        <th>Payment Type</th>
                        <th>Payment Status</th>
                        <th>Order Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td><a href="{{route('admin.customersOrder.show',['customersOrder' => $order->_id])}}">{{$order->order_display_no}}</a></td>
                            <td>{{$order->customer->name}}</td>
                            <td>{{$order->order_type}}</td>
                            <td><i class="fa-solid fa-indian-rupee-sign"></i>{{$order->amount}}</td>
                            <td>{{$order->service_name}}</td>
                            <td>{{$order->items}}</td>
                            <td>{{$order->payment_type}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>{{$order->ord_status}}</td>
                            <td>
                                <a href="{{route('admin.customersOrder.edit', ['customersOrder' => $order->_id])}}"><i class="fa-solid fa-pen"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
