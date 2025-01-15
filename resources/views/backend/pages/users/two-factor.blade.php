@extends('backend.pages.users.layout')
@section('menu-title', 'Two factor Authentication')
@section('page-content')
    <div class="row">
        <div class="col-sm-9">
            <div class="two-factor content p-0">
                <h5>Email Address</h5>
                <p>Send security PIN to email address.</p>
            </div>
        </div>
        <div class="col-sm-3 text-end">
            <div class="factor-checkbox">
                <div class="status-toggle">
                    <input id="rating_1" class="check" type="checkbox" checked="">
                    <label for="rating_1" class="checktoggle checkbox-bg factor">checkbox</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-9">
            <div class="two-factor content p-0">
                <h5>Phone Number</h5>
                <p>Send security PIN to phone number.</p>
            </div>
        </div>
        <div class="col-sm-3 text-end">
            <div class="factor-checkbox">
                <div class="status-toggle">
                    <input id="rating_1" class="check" type="checkbox" checked="">
                    <label for="rating_1" class="checktoggle checkbox-bg factor">checkbox</label>
                </div>
            </div>
        </div>
    </div>

@endsection
