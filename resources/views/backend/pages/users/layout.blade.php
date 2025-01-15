@extends('backend.layouts.app')
@section('title', 'Profile')
@section('page-title', 'My Profile')
@section('list-btn')

@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="widget settings-menu mb-0">
            <ul>
              <li class="nav-item">
                <a href="{{route('users.show')}}" class="nav-link ">
                  <i class="fa fa-user"></i>
                  <span>Profile</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('users.balance')}}" class="nav-link ">
                  <i class="fa fa-wallet"></i>
                  <span>Balance</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.deposit')}}" class="nav-link ">
                  <i class="fa fa-bank"></i>
                  <span>Deposit</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.withdraw')}}" class="nav-link ">
                  <i class="fa fa-credit-card"></i>
                  <span>Withdraw</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('users.password')}}" class="nav-link ">
                  <i class="fa fa-lock"></i>
                  <span>Update Password</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.twofactor')}}" class="nav-link">
                <i class="fa fa-certificate"></i> <span>Two Factor</span>
                </a>
                </li>
              <li class="nav-item">
                <a href="{{route('users.appsettings')}}" class="nav-link ">
                  <i class="fa fa-cogs"></i>
                  <span>Application Settings</span>
                </a>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-xl-9 col-md-8">
      <div class="card">
        <div class="card-body w-100">
          <div class="content-page-header">
            <h5 class="setting-menu">@yield('menu-title')</h5>
          </div>
          @yield('page-content')
        </div>
      </div>
    </div>
  </div>
@endsection
