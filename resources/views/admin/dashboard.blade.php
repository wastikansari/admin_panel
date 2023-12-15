@extends('layouts/admin_app')
@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Dashboard
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
          <h2 class="font-weight-normal mb-3"> Total Customer <i
              class="mdi mdi-chart-line mdi-24px float-right"></i>
          </h2>
          <h2 class="mb-5">{{$total_customer}}</h2>
          <h6 class="card-text">Increased by 60%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
          <h2 class="font-weight-normal mb-3">Total Orders <i
              class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
          </h2>
          <h2 class="mb-5">{{$total_order}}</h2>
          <h6 class="card-text">Decreased by 10%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
          <h2 class="font-weight-normal mb-3">Picked up Orders <i
              class="mdi mdi-diamond mdi-24px float-right"></i>
          </h2>
          <h2 class="mb-5">1</h2>
          <h6 class="card-text">Increased by 5%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-delivery card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
          <h2 class="font-weight-normal mb-3">Delivered Orders <i
              class="mdi mdi-diamond mdi-24px float-right"></i>
          </h2>
          <h2 class="mb-5">1</h2>
          <h6 class="card-text">Increased by 5%</h6>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Visit And Sales Statistics</h4>
              <div id="visit-sale-chart-legend"
                class="rounded-legend legend-horizontal legend-top-right float-right"></div>
            </div>
            <canvas id="visit-sale-chart" class="mt-4"></canvas>
          </div>
        </div>
      </div>
    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Analytics</h4>
            <canvas id="traffic-chart"></canvas>
            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
          </div>
        </div>
      </div>
    </div> -->
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Recent Orders</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> Name </th>
                  <th> Services </th>
                  <th> Payment Status </th>
                  <th> Order Status </th>
                  <th> Date </th>
                  <th> Tracking ID </th>
                </tr>
              </thead>
              <tbody>
                  {{--
                <tr>
                  <td>
                    <img src="assets/images/faces/face1.jpg" class="me-2" alt="image"> Wastik Ansari
                  </td>
                  <td> Subscription (DC20) </td>
                  <td>
                    <label class="badge badge-gradient-success">DONE</label>
                  </td>
                  <td> Subscription </td>
                  <td><a href=""> #OR1 </a> </td>
                </tr> --}}
                @foreach ($recent_orders as $order)
                <tr>
                    <td>{{$order->customer->name}}</td>
                    <td>{{$order->service_name}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->ord_status}}</td>
                    <td> {{date('Y-m-d', strtotime($order->createdAt))}} </td>
                    <td><a href=""> {{$order->order_display_no}} </a> </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Orders Status</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th> #ID </th>
                  <th> Name </th>
                  <th> Due Date </th>
                  <th> Progress </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 1 </td>
                  <td> Herman Beck </td>
                  <td> May 15, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 2 </td>
                  <td> Messsy Adam </td>
                  <td> Jul 01, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 3 </td>
                  <td> John Richards </td>
                  <td> Apr 12, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%"
                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 4 </td>
                  <td> Peter Meggik </td>
                  <td> May 15, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 5 </td>
                  <td> Edward </td>
                  <td> May 03, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%"
                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td> 5 </td>
                  <td> Ronald </td>
                  <td> Jun 05, 2015 </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-white">Todo</h4>
          <div class="add-items d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
              id="add-task">Add</button>
          </div>
          <div class="list-wrapper">
            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked> take 50 order today </label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox"> Orders assign to pick up </label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
