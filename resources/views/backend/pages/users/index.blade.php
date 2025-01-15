@extends('backend.layouts.app')
@section('title', 'Users')
@section('page-title', 'Users')
@section('list-btn')
<ul class="filter-list">
    <li>
        <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#new-user"><i
                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add user</a>
    </li>
</ul>
@include('backend.components.new-user-modal')
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
                                                src="{{ asset('backend/assets/img/profiles/avatar-14.jpg')}}" alt="User Image"></a>
                                        <a href="profile.html">{{$user->name}} <span><span class="__cf_email__"
                                                    data-cfemail="751f1a1d1b35100d14180519105b161a18">{{$user->email}}</span></span></a>
                                    </h2>
                                </td>
                                <td>+1 989-438-3131</td>
                                <td>{{$user->roles[0]->name}}</td>
                                <td><span class="badge  bg-ash-gray text-gray-light">10 mins ago</span></td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y, h:i A') }}</td>
                                <td>
                                    @if ($user->trashed())
                                    <form method="POST" id="restore-{{$user->id}}" action="{{ route('users.restore',$user->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <button onclick="restore({{$user->id}})" type="button" class="badge bg-danger-light" style="border: none">Restore</button>
                                    </form>
                                    @else
                                    <span class="badge  bg-success-light">Active</span>
                                    @endif
                                    
                                </td>
                                <td class="d-flex align-items-center">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li>
                                                    
                                                    <a class="dropdown-item" href="{{route('users.edit',$user->id)}}"><i
                                                        class="far fa-edit me-2"></i>Edit</a>
                                                    
                                                </li>
                                                <li>
                                                    <form method="POST" id="form-{{$user->id}}" action="{{ route('users.destroy',$user->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="dropdown-item" onclick="delete_user({{$user->id}})" href="javascript:void(0);"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                                    </form>
                                                   
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
@section('scripts')
<script>
     function delete_user(id) {
        Swal.fire({
            title: "Delete User?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm",
            confirmButtonClass: "btn btn-primary",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: false
        }).then(function(t) {
            if (t.value) {
                $(`#form-${id}`).submit();
            }

        })
    }

    function restore(id) {
        Swal.fire({
            title: "Restore User?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm",
            confirmButtonClass: "btn btn-primary",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: false
        }).then(function(t) {
            if (t.value) {
                $(`#restore-${id}`).submit();
            }

        })
    }
</script>
@endsection
