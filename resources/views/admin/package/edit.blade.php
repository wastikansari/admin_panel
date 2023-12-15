@extends('layouts.admin_app')

@section('after-css')
<style>
    .toggle .btn {
        padding: 0.875rem 1.5rem;
    }

    .toggle-on.btn {
        padding-right: 1.5rem;
    }
</style>
@endsection

@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Package Edit
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
        <form method="post" action="{{route('admin.package.update', ['package' => $package->_id])}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <label for="package_name" class="mb-1">Name :</label>
                    <input  id="package_name" type="text" class="form-control" name="package_name" placeholder="Enter Package Name" value="{{$package->package_name}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="prices" class="mb-1">Price :</label>
                    <input  id="prices" type="text" class="form-control" name="prices" placeholder="Enter Package Price" value="{{$package->prices}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="valid" class="mb-1">Valid :</label>
                    <input  id="valid" type="text" class="form-control" name="valid" placeholder="valid days" value="{{$package->valid}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="free_pickup" class="mb-1">Free Pickup :</label>
                    <input  id="free_pickup" type="text" class="form-control" name="free_pickup" placeholder="Free Pickup" value="{{$package->free_pickup}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="free_dedevery" class="mb-1">Free Delevery :</label>
                    <input  id="free_delevery" type="text" class="form-control" name="free_delivery" placeholder="Free Delevery" value="{{$package->free_delivery}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="routine_garments" class="mb-1">Routine Garments :</label>
                    <input  id="routine_garments" type="text" class="form-control" name="routine_garments" placeholder="Routine Garments" value="{{$package->routine_garments}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="ironing" class="mb-1">Ironing :</label>
                    <input  id="ironing" type="text" class="form-control" name="ironing" placeholder="Ironing" value="{{$package->ironing}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="steam_ironing" class="mb-1">Steam Ironing :</label>
                    <input  id="steam_ironing" type="text" class="form-control" name="steam_ironing" placeholder="Steam Ironing" value="{{$package->steam_ironing}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="wash_ironing" class="mb-1">Wash Ironing :</label>
                    <input  id="wash_ironing" type="text" class="form-control" name="wash_ironing" placeholder="Wash Ironing" value="{{$package->wash_ironing}}" />
                </div>

                <div class="col-4 mt-2">
                    <label for="dry_cleaning" class="mb-1">Dry Cleaning :</label>
                    <input  id="dry_cleaning" type="text" class="form-control" name="dry_cleaning" placeholder="Dry Cleaning" value="{{$package->dry_cleaning}}" />
                </div>

                <div class="col-12 mt-2">
                    <label for="termConditions" class="mb-1">Term & Condition :</label>
                    <textarea name="termConditions" id="termConditions" class="form-control" rows="5">{{$package->termConditions}}</textarea>
                </div>

                <div class="col-12 mt-2">
                    <label for="termConditions" class="mb-1">Status :</label>
                    <input type="checkbox" id="chkToggle2" {{$package->status ? 'checked' : ''}} data-toggle="toggle" name="status" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-width="120" data-height="20" >
                </div>

                <div class="col-12 mt-4">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('after-js')
<script>

</script>
@endsection
