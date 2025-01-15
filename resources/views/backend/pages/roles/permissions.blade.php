@extends('backend.layouts.app')
@section('title', 'Permissions')
@section('page-title', 'Role Permissions')
@section('list-btn')
    <ul class="filter-list">
        <li>
            <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#add_permission"><i
                    class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Permissions</a>
        </li>
    </ul>
    @include('backend.components.add-permission-modal')
@endsection
@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div
        class="role-testing d-flex align-items-center justify-content-between"
      >
        <h6>Role Name:<span class="ms-1">{{$role->name}}</span></h6>

      </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
      <div class="card-table">
        <div class="card-body">
           
          <div class="table-responsive">
            <table class="table table-stripped table-hover">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>Permission</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rolePermissions as $index=>$permission)
                <tr>
                    <td>{{$index + 1 }}.</td>
                    <td class="role-data">{{$permission->name}}</td>
                    <td>
                      <form method="POST" id="form-{{ $permission->id }}"
                        action="{{ route('permissions.remove', $role->name) }}">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="permission" value="{{$permission->name}}">
                        <a href="javascript:void(0)" onclick="remove_permission({{ $permission->id }})" class="btn btn-greys me-2"><i class="fa fa-trash me-1"></i> Remove</a>
                    </form>
                       
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
      $(document).ready(function(){
        $(".permissions").select2({
            tags: false, 
            placeholder: "Select permissions", 
            allowClear: true
        });
    });

    function remove_permission(id) {
          Swal.fire({
              title: "Unassign Permission?",
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
  </script>
@endsection
