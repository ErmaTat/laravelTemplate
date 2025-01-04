@extends('backend.layouts.app')
@section('title', 'Roles')
@section('page-title', 'Roles & Permission')
@section('list-btn')
    <ul class="filter-list">
        <li>
            <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#add_role"><i
                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Role</a>
        </li>
    </ul>
    @include('backend.components.add-role-modal')
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
                                    <th>ID</th>
                                    <th>Role Name</th>
                                    <th>Created at</th>
                                    <th class="no-sort">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $index=>$role)
                                <tr>
                                    <td>{{$index + 1}}.</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{ $role->created_at->format('d M Y, h:i A') }}</td>
                                    <td class="d-flex align-items-center">
                                        <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit_role{{$role->id}}"><i class="fa fa-edit me-1"></i> Edit Role</a>
                                        <a href="{{route('permissions.index',$role->name)}}" class="btn btn-greys me-2"><i
                                                class="fa fa-shield me-1"></i> Permissions</a>
                                        <a href="javascript:void(0)" class="btn btn-danger me-2 text-white"><i class="fa fa-trash me-1"></i> Delete Role</a>
                                    </td>
                                </tr>
                                @include('backend.components.edit-role-modal')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
