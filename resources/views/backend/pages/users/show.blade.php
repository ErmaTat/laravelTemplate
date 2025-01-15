@extends('backend.pages.users.layout')
@section('menu-title')
    Profile Info ({{ $user->name }})
@endsection
@section('page-content')
<form action="{{route('notifications.send')}}" method="POST">
  @csrf
  <button  class="btn btn-remove">send notification</button>
</form>
    <form action="{{route('users.update',$user->id)}}" method="POST" >
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="profile-picture">
                <div class="upload-profile me-2">
                    <div class="profile-img">
                        <img id="blah" class="avatar" src="assets/img/profiles/avatar-10.jpg" alt="profile-img" />
                    </div>
                </div>
                <div class="img-upload">
                    <label class="btn btn-primary">
                        Upload new picture <input type="file" />
                    </label>
                    
                   
                    <p class="mt-1">
                        Logo Should be minimum 152 * 152 Supported File format
                        JPG,PNG,SVG
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-title">
                    <h5>General Information</h5>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="input-block mb-3">
                    <label>Display Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Display Name" name="name"
                        value="{{ $user->name }}" />
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="input-block mb-3">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter Email Address" name="email"
                        value="{{ $user->email }}" />
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="input-block mb-3">
                    <label>Mobile Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Mobile Number" />
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="input-block mb-3">
                    <label>Date of Birth</label>
                    <div class="cal-icon cal-icon-info">
                        <input type="text" class="datetimepicker form-control" name="dob" placeholder="Select Date" />
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="btn-path text-end">
                    <a href="javascript:void(0);" class="btn btn-cancel bg-primary-light me-3">Cancel</a>
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </div>
            </div>
        </div>
    </form>
@endsection
