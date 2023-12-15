@extends('layouts.admin_app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Customer List
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <a class="btn btn-primary" href="{{route('admin.customer.create')}}">Create Customer</a>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Wallet Balance</th>
                        <th class="text-center">Unpaid Balance</th>
                        <th class="text-center">Order Limit</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($customers as $customer)
                        <tr >
                            <td><a href="{{route('admin.customer.show', ['customer' => $customer->_id])}}">{{$customer->name}}</a></td>
                            <td>{{$customer->email}}</td>
                            <td class="text-center">{{$customer->mobile}}</td>
                            <td class="text-center"><i class="fa-solid fa-indian-rupee-sign"></i>{{$customer->wallet_balance}}</td>
                            <td class="text-center"><i class="fa-solid fa-indian-rupee-sign"></i>{{$customer->unpaid_balance}}</td>
                            <td class="text-center">{{$customer->order_limit}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.customer.edit', ['customer' => $customer->_id])}}"><i class="fa-solid fa-pen"></i></a>
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
