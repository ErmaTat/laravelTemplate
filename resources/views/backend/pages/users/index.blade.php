@extends('backend.layouts.app')
@section('title', 'Users')
@section('page-title', 'Users')
@section('list-btn')
<ul class="filter-list">
    <li>
        <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip" data-bs-placement="bottom"
            data-bs-original-title="Filter"><span class="me-2"><img src="{{ asset('backend/assets/img/icons/filter-icon.svg')}}"
                    alt="filter"></span>Filter </a>
    </li>
    <li>
        <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_user"><i
                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add user</a>
    </li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Mobile Number</th>
                                <th>Role </th>
                                <th>Last Activity</th>
                                <th>Created on</th>
                                <th>Status</th>
                                <th class="no-sort">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index=>$user)
                            <tr>
                                <td>{{$index+1}}.</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                class="avatar-img rounded-circle"
                                                src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
                                        <a href="profile.html">{{$user->name}} <span><span class="__cf_email__"
                                                    data-cfemail="751f1a1d1b35100d14180519105b161a18">{{$user->email}}</span></span></a>
                                    </h2>
                                </td>
                                <td>+1 989-438-3131</td>
                                <td>{{$user->roles[0]->name}}</td>
                                <td><span class="badge  bg-ash-gray text-gray-light">10 mins ago</span></td>
                                <td>19 Dec 2023, 06:12 PM</td>
                                <td><span class="badge  bg-success-light">Active</span></td>
                                <td class="d-flex align-items-center">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#edit_user"><i
                                                            class="far fa-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                            class="far fa-trash-alt me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
