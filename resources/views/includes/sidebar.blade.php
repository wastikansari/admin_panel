<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="assets/images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{auth()->user()->name}}</span>
            <span class="text-secondary text-small">admin</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Customers</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.index')}}">All Customers</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.create')}}">Registrations</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-Orders" aria-expanded="false"
          aria-controls="ui-basic">
          <span class="menu-title">Orders</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-Orders">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.customersOrder.index')}}">All Orders</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Take Orders</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-Package" aria-expanded="false"
          aria-controls="ui-basic">
          <span class="menu-title">Package</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-Package">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.package.index')}}">All Package</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.package.create') }}">Create New Package</a></li>
          </ul>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
          aria-controls="general-pages">
          <span class="menu-title">Masters</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.CreateInvoice') }}"> Invoice </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> States </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Cities </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Pincodes </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Services </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> Garment Types </a></li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>
