@extends('backend.pages.users.layout')
@section('menu-title', 'Withdraw')

@section('css')
<style>
    .font-extrabold {
    font-weight: 800;
}
</style>
@endsection
@section('page-content')
    <div class="row">

        <div class="col-12">
            <div class="input-block mb-3">
                <label>Payment Method:</label>
                <select name="" id="" class="form-select">
                    <option value="">--Select Method--</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="input-block mb-3">
                <label>Enter Bank:</label>
                <select name="" id="" class="form-select">
                    <option value="">--Select Bank--</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="input-block mb-3">
                <label>Account:</label>
                <input type="text" class="form-control" placeholder="Account Numnber" />
            </div>
        </div>
        <div class="col-12">
            <div class="input-block mb-3">
                <label>Account Name:</label>
                <input type="text" class="form-control" placeholder="Account name" disabled />
            </div>
        </div>
        <div class="col-12">
            <div class="input-block mb-3">
                <label>Amount (Min:NGN 100):</label>
                <input type="text" class="form-control" placeholder="Enter Amount" />
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4 mb-4">
            <div class="flex mr-1 items-center font-extrabold"><span
                    class="text-secondary mr-1">Available:</span><span>NGN&nbsp;0.00</span></div>
            {{-- <div class="flex font-extrabold">
                <a href="/rollover" class="text-secondary  mr-1 text-right underline inactive"
                    link="">Bonus Account:</a>NGN&nbsp;0.00</div> --}}
        </div>
        <div class="">
            {{-- <div class="btn-path text-end"> --}}
            {{-- <a href="javascript:void(0);" class="btn btn-cancel bg-primary-light me-3">Cancel</a> --}}
            <a href="javascript:void(0);" class="btn btn-primary col-lg-12">Proceed</a>
            {{-- </div> --}}
        </div>
        <div class="card">
            <div class="card-body p-2">
                <div class="d-flex flex-row align-items-center rounded-xl  p-3 mt-4">
                    <div class="avatar " style="margin-x: -10px">
                        <i class="avatar-title rounded-circle border fa fa-shield"></i>
                    </div>
                        <span class="font-semibold text-secondary">You will be redirected to a third-party site verified by Fortune8
                            for a secure and trustworthy browsing experience</span>
                    
        
                </div>
            </div>
        </div>

        
    </div>
@endsection
