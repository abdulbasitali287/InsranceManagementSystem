<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Insurance Management System</title>
     <!-- boot css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mystyle.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/ins_logo.jpg')}}" />
    {{-- jquery  --}}
    <!-- Add this before your </head> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('dashboard')}}"><img src="{{asset('assets/images/ins_logo.jpg')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('dashboard')}}"><img src="{{asset('assets/images/ins_logo.jpg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/face15.jpg') }}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{url('record/todo')}}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <!-- <span class="nav-link">Navigation</span> -->
          </li>
          
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Users Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('permissions.create') }}">Add Module</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('permissions.index') }}">Module List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('roles.create') }}">Add Roles</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('roles.index') }}">Roles List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}">Add Users</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}">Users List</a></li>
              </ul>
            </div>
          </li>

          @can('agency')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Agency</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('agency/create') }}"> Add Agency </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('agency') }}"> Agency List </a></li>
              
              </ul>
            </div>
          </li>
          @endcan
          @can('agent')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth_1" aria-expanded="false" aria-controls="auth_1">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Agents</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth_1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('agent.create')}}"> Add Agents </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('agent') }}"> Agents List </a></li>
              
              </ul>
            </div>
          </li>
          @endcan
          @can('customer')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic_1" aria-expanded="false" aria-controls="ui-basic_1">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Customers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic_1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('customer/create') }}">Add Customers</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('customer') }}">Customers List</a></li>
              </ul>
            </div>
          </li>
          @endcan
          @can('product')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-3" aria-expanded="false" aria-controls="ui-basic-3">
              <span class="menu-icon">
                <i class="mdi mdi-archive"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('product/create') }}">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('product') }}">Products List</a></li>
              </ul>
            </div>
          </li>
          @endcan
          @can('vendor')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-4" aria-expanded="false" aria-controls="ui-basic-4">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Vendors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('vendor/create') }}">Add Vendors</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('vendor') }}">Vendors List</a></li>
              </ul>
            </div>
          </li>
          @endcan
          @can('carrier')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-5" aria-expanded="false" aria-controls="ui-basic-5">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Carrier</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('carrier/create') }}">Add Carriers</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('carrier') }}">Carriers List</a></li>
              </ul>
            </div>
          </li>
          @endcan
      
          @can('employee')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic_x" aria-expanded="false" aria-controls="ui-basic_x">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
              <span class="menu-title">Team</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic_x">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('employee/create') }}">Add Team Member</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('employee') }}">Team Member List</a></li>
              </ul>
            </div>
          </li>
          @endcan
          

          @can('payment')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic_payment" aria-expanded="false" aria-controls="ui-basic_x">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
              {{-- edit payment as customer --}}
              <span class="menu-title">Customer</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic_payment">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('payment/create') }}">Add Customer</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('payment') }}">Customer List</a></li>
              </ul>
            </div>
          </li>
          @endcan

{{-- record div --}}
{{-- <li class="nav-item menu-items">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic_x" aria-expanded="false" aria-controls="ui-basic_x">
    <span class="menu-icon">
      <i class="mdi mdi-account-circle"></i>
    </span>
    <span class="menu-title">Record</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic_x">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('record/create') }}">Add Record</a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('record') }}">Record List</a></li>
    </ul>
  </div>
</li> --}}
{{-- record div end  --}}

          @can('policy')
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic_policy" aria-expanded="false" aria-controls="ui-basic_x">
              <span class="menu-icon">
                <i class="mdi mdi-cash"></i>
              </span>
              <span class="menu-title">Records</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic_policy">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('policy/create') }}">Add Record</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('policy') }}">Records List</a></li>
              </ul>
            </div>
          </li>
          @endcan


          {{-- new Reminder --}}
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic_reminder" aria-expanded="false" aria-controls="ui-basic_x">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Reminder</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic_reminder">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('reminder/create') }}">Add Reminder</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('record/remainder')}}">Reminder List</a></li>
              </ul>
            </div>
          </li>
          {{-- remainder  --}}


            {{-- <li class="nav-item menu-items">
              <a class="nav-link"  href="{{url('record/remainder')}}"  >
                <span class="menu-icon">
                  <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Reminder</span>
              </a>
            </li> --}}


            {{-- <li class="nav-item menu-items">
              <a class="nav-link"  href="{{url('record/todo')}}"  >
                <span class="menu-icon">
                  <i class="mdi mdi-calendar-today"></i>
                </span>
                <span class="menu-title">Task Todo</span>
              </a>
            </li> --}}

            {{-- new task --}}
            <li class="nav-item menu-items">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic_task" aria-expanded="false" aria-controls="ui-basic_x">
                <span class="menu-icon">
                  <i class="mdi mdi-calendar-today"></i>
                </span>
                <span class="menu-title">Task Todo</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic_task">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('todo/create') }}">Add Task</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('record/todo')}}">Task List</a></li>
                </ul>
              </div>
            </li>
          
          
          
        </ul>
      </nav>
      <!-- partial -->