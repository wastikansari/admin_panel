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
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Customer Detail [<span class="text-primary">{{$customer->name}}</span>]
    </h3>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h3 class="pb-4">Detail :</h3>
                <table class="table table-striped table-hover order_tbl">
                    <tr>
                        <td><b>Profile Picture:</b> </td>
                        <td>{{$customer->profile_pic}}</td>
                    </tr>
                    <tr>
                        <td><b>Name:</b> </td>
                        <td>{{$customer->name}}</td>
                    </tr>
                    <tr>
                        <td><b>Mobile:</b> </td>
                        <td>{{$customer->mobile}}</td>
                    </tr>
                    <tr>
                        <td><b>Email:</b> </td>
                        <td>{{$customer->email}}</td>
                    </tr>
                    <tr>
                        <td><b>Wallet Balance:</b> </td>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i>{{number_format($customer->wallet_balance, 2)}}</td>
                    </tr>
                    <tr>
                        <td><b>Unpaid Balance:</b> </td>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i>{{number_format($customer->unpaid_balance, 2)}}</td>
                    </tr>
                    <tr>
                        <td><b>Familly Member:</b> </td>
                        <td>{{$customer->familly_member}}</td>
                    </tr>
                    <tr>
                        <td><b>Order Limit:</b> </td>
                        <td>{{$customer->order_limit}}</td>
                    </tr>
                    <tr>
                        <td><b>Gender:</b> </td>
                        <td>{{$customer->gender}}</td>
                    </tr>
                    <tr>
                        <td><b>Date Of Birth:</b> </td>
                        <td>{{$customer->dob}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-6">
                <h3 class="pb-4">Subscription :</h3>
                <table class="table table-striped table-hover order_tbl">
                    <thead>
                        <tr>
                            <th><b>#</th>
                            <th><b>Name</b></th>
                            <th><b>Price</b></th>
                            <th><b>Payment Type</b></th>
                            <th><b>Payment Status</b></th>
                            <th><b>Subscription Date</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscriptions as $key => $subscription)
                            <tr>
                                <td><b>#{{$key+1}}</b></td>
                                <td>{{$subscription->package->package_name}}</td>
                                <td><i class="fa-solid fa-indian-rupee-sign"></i>{{number_format($subscription->amount, 2)}}</td>
                                <td>{{$subscription->payment_type}}</td>
                                <td>{{$subscription->payment_status}}</td>
                                <td>{{date('Y-m-d', strtotime($subscription->createdAt))}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h3 class="pb-4">Orders :</h3>
                <table class="table table-striped table-hover order_tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order Type</th>
                            <th>Service Name</th>
                            <th>Ordered Qty</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>Payment Type</th>
                        </tr>
                    </thead>
                    @foreach ($orders as $key => $order)
                    <tr>
                        <td><a href="{{route('admin.customersOrder.show', ['customersOrder' => $order->_id])}}"> #{{$order->order_display_no}}</a></td>
                        <td>{{$order->order_type}}</td>
                        <td>{{$order->service_name}}</td>
                        <td>{{$order->items}}</td>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i>{{number_format($order->amount, 2)}}</td>
                        <td>
                        @if ($order->payment_status == 'Unpaid')
                            <span class="text-danger">
                        @elseif ($order->payment_status == 'Paid')
                            <span class="text-success">
                        @else
                            <span class="text-primary">
                        @endif
                                {{$order->payment_status}}
                            </span>
                        </td>
                        <td>{{$order->payment_type}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h3 class="pb-4">Address :</h3>
                <table class="table table-striped table-hover order_tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Address Type</th>
                            <th>Address Label</th>
                            <th>Address</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($addresses as $key => $address)
                        <tr>
                            <td>#{{$key+1}}</td>
                            <td>{{ $address->address_type}}</td>
                            <td>{{ $address->address_label}}</td>
                            <td>{{ $address->format_address}}</td>
                            <td><span class="text-primary">{{ $address->status ? 'Active' : ''}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
