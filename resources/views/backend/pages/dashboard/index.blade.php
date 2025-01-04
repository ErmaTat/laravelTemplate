@extends('backend.layouts.app')
@section('title','Dashboard')
@section('page-title', 'Admin Dashboard')
@section('list-btn')
<ul class="filter-list">
    <li>
      <a
        class="btn-filters"
        href="javascript:void(0);"
        data-bs-toggle="tooltip"
        data-bs-placement="bottom"
        title="Refresh"
        ><span><i class="fas fa-refresh"></i></span
      ></a>
    </li>
   
    {{-- <li>
      <a
        class="btn btn-primary"
        href="#"
        data-bs-toggle="modal"
        data-bs-target="#add_companies"
        ><i
          class="fa fa-plus-circle me-2"
          aria-hidden="true"
        ></i
        >Add Company</a
      >
    </li> --}}
  </ul>
@endsection
@section('content')
<div class="super-admin-list-head">
    <div class="row">
      <div class="col-xl-3 col-md-6 d-flex">
        <div class="card w-100">
          <div class="card-body">
            <div class="grid-info-item total-items">
              <div class="grid-info">
                <span>Total Users</span>
                <h4>987</h4>
              </div>
              <div class="grid-head-icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex">
        <div class="card w-100">
          <div class="card-body">
            <div class="grid-info-item active-items">
              <div class="grid-info">
                <span>Site Visits</span>
                <h4>154</h4>
              </div>
              <div class="grid-head-icon">
                <i class="fas fa-check-square"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex">
        <div class="card w-100">
          <div class="card-body">
            <div class="grid-info-item location-info">
              <div class="grid-info">
                <span>Site Visits(today)</span>
                <h4>2</h4>
              </div>
              <div class="grid-head-icon">
                <i class="fas fa-calendar"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- <div class="col-xl-3 col-md-6 d-flex">
        <div class="card w-100">
          <div class="card-body">
            <div class="grid-info-item location-info">
              <div class="grid-info">
                <span>Company Locations</span>
                <h4>200</h4>
              </div>
              <div class="grid-head-icon">
                <i class="fe fe-map-pin"></i>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
@endsection