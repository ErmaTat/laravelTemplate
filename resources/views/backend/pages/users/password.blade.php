@extends('backend.pages.users.layout')
@section('menu-title', 'Update Password')
@section('page-content')
<form action="{{route('password.update')}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-block mb-3">
                <label>Old Password: <span class="text-danger">*</span></label>
                <input type="password" class="form-control" required name="current_password"
                    placeholder="********" />
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-block mb-3">
                <label>New Password: <span class="text-danger">*</span></label>
                <input type="password" class="form-control" required name="password"
                    placeholder="********" />
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-block mb-3">
                <label>Confirm New Password: <span class="text-danger">*</span></label>
                <input type="password" class="form-control" required
                    name="password_confirmation" placeholder="********" />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <button type="submit"
                    class="float-end btn img-btn btn-primary paid-continue-btn">
                    Update Password
                </button>
            </div>
        </div>

    </div>
</form>
   
@endsection
