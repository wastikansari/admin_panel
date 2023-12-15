@extends('layouts.admin_app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Package List
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
                        <th>Name</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Valid</th>
                        <th>Free Pickup</th>
                        <th>Routine Garments</th>
                        <th>Ironing</th>
                        <th>Steam Ironing</th>
                        <th>Wash Ironing</th>
                        <th>Dry Cleaning</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{$package->package_name}}</td>
                            <td>{{$package->package_code}}</td>
                            <td><i class="fa-solid fa-indian-rupee-sign"></i>{{$package->prices}}</td>
                            <td>{{$package->valid}} Days</td>
                            <td>{{$package->free_pickup}}</td>
                            <td>{{$package->routine_garments}}</td>
                            <td>{{$package->ironing}}</td>
                            <td>{{$package->steam_ironing}}</td>
                            <td>{{$package->wash_ironing}}</td>
                            <td>{{$package->dry_cleaning}}</td>
                            <td>{{$package->status ? 'Show' : 'Hide'}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.package.edit', ['package' => $package->_id])}}"><i class="fa-solid fa-pen"></i></a>
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
