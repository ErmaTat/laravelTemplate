@extends('backend.pages.users.layout')
@section('menu-title', 'Profile Info')
@section('page-content')
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
                <a class="btn btn-remove">Delete</a>
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
                <label>Display Name</label>
                <input type="text" class="form-control" placeholder="Display Name" name="name"
                    value="{{ $user->name }}" />
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="input-block mb-3">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email Address" name="email"
                    value="{{ $user->email }}" />
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="input-block mb-3">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter Mobile Number" />
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="input-block mb-3">
                <label>Date of Birth</label>
                <div class="cal-icon cal-icon-info">
                    <input type="text" class="datetimepicker form-control" placeholder="Select Date" />
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-12">
      <div class="form-title">
        <h5>Address Information</h5>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="input-block mb-3">
        <label>Address</label>
        <input
          type="text"
          class="form-control"
          placeholder="Enter your Address"
        />
      </div>
    </div>
    <div class="col-lg-6 col-12">
      <div class="input-block mb-3">
        <label>Country</label>
        <input
          type="text"
          class="form-control"
          placeholder="Enter your Country"
        />
      </div>
    </div>
    <div class="col-lg-6 col-12">
      <div class="input-block mb-3">
        <label>State</label>
        <input
          type="text"
          class="form-control"
          placeholder="Enter your State"
        />
      </div>
    </div>
    <div class="col-lg-6 col-12">
      <div class="input-block mb-3">
        <label>City</label>
        <input
          type="text"
          class="form-control"
          placeholder="Enter your City"
        />
      </div>
    </div>
    <div class="col-lg-6 col-12">
      <div class="input-block mb-3">
        <label>Postal Code</label>
        <input
          type="text"
          class="form-control"
          placeholder="Enter Your Postal Code"
        />
      </div>
    </div> --}}
        <div class="col-lg-12">
            <div class="btn-path text-end">
                <a href="javascript:void(0);" class="btn btn-cancel bg-primary-light me-3">Cancel</a>
                <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
            </div>
        </div>
    </div>
@endsection
