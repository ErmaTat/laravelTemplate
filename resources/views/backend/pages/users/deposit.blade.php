@extends('backend.pages.users.layout')
@section('menu-title', 'Deposit')
@section('page-content')
    <div class="row">

        <div class="col-12">
            <div class="input-block mb-3">
                <label>Payment Method:</label>
                <select name="" id="" class="form-select">
                    <option value="">--Select Menu--</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="input-block mb-3">
                <label>Enter Bank:</label>
                <select name="" id="" class="form-select">
                    <option value="">--Select Menu--</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="input-block mb-3">
                <label>Amount:</label>
                <input type="text" class="form-control" placeholder="Enter Deposit Amount" />
            </div>
        </div>

        <div class="">
            {{-- <div class="btn-path text-end"> --}}
            {{-- <a href="javascript:void(0);" class="btn btn-cancel bg-primary-light me-3">Cancel</a> --}}
            <a href="javascript:void(0);" class="btn btn-primary col-lg-12">Proceed</a>
            {{-- </div> --}}
        </div>
       
        <div class="flex flex-row items-center rounded-xl  p-3 mt-4">
                <div class="avatar mr-1 h-10 w-10" style="margin-x: -10px">
                    <i class="avatar-title rounded-circle border fa fa-shield"></i>
                    <span class="font-semibold text-secondary">You will be redirected to a third-party site verified by Fortune8
                        for a secure and trustworthy browsing experience</span>
                </div>
            
        </div>
    </div>
@endsection
