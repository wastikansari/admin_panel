@extends('layouts.admin_app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Create Customer
    </h3>
</div>
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('admin.customer.store')}}">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-6 mt-3">
                    <label for="" class="mb-1">Customer Name :</label>
                    <input type="text" name="name" class="form-control" placeholder="Customer Name." value="{{old('name')}}" />
                    @if ($errors->has('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                    @endif
                </div>

                <div class="col-6 mt-3">
                    <label for="" class="mb-1">Customer Mobile :</label>
                    <input type="number" class="form-control" name="mobile" placeholder="Mobile Number." value="{{old('mobile')}}">
                    @if ($errors->has('mobile'))
                        <div class="text-danger">{{$errors->first('mobile')}}</div>
                    @endif
                </div>

                <div class="col-6 mt-3">
                    <label for="" class="mb-1">Customer Email :</label>
                    <input type="email" name="email" class="form-control" placeholder="Customer Email." value="{{old('email')}}" />
                    @if ($errors->has('email'))
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    @endif
                </div>

                <div class="col-6 mt-3">
                    <label for="" class="mb-1">Customer Password :</label>
                    <input type="password" name="password" class="form-control" placeholder="Password." />
                    @if ($errors->has('password'))
                        <div class="text-danger">{{$errors->first('password')}}</div>
                    @endif
                </div>

                <div class="col-3 mt-3">
                    <label for="" class="mb-1">Family Member :</label>
                    <input type="number" class="form-control" name="familly_member" placeholder="Family Member." value="{{old('familly_member')}}">
                    @if ($errors->has('familly_member'))
                        <div class="text-danger">{{$errors->first('familly_member')}}</div>
                    @endif
                </div>

                <div class="col-3 mt-3">
                    <label for="" class="mb-1">Order Limit :</label>
                    <input type="number" class="form-control" name="order_limit" placeholder="Order Limit." value="{{old('order_limit')}}">
                    @if ($errors->has('order_limit'))
                        <div class="text-danger">{{$errors->first('order_limit')}}</div>
                    @endif
                </div>

                <div class="col-3 mt-3">
                    <label for="" class="mb-1">Select Gender :</label>
                    <select name="gender" id="" class="form-control">
                        <option value="" selected disabled>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @if ($errors->has('gender'))
                        <div class="text-danger">{{$errors->first('gender')}}</div>
                    @endif
                </div>

                <div class="col-3 mt-3">
                    <label for="" class="mb-1">Date Of Birth :</label>
                    <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
                    @if ($errors->has('dob'))
                        <div class="text-danger">{{$errors->first('dob')}}</div>
                    @endif
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('after-js')

@endsection
