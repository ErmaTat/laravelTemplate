@extends('backend.pages.users.layout')
@section('menu-title', 'Application Settings')
@section('page-content')
<div class="row">
    <div class="layout-head pb-3">
        <h6 style="font-weight: 600">Theme:</h6>
    </div>
    <div class="colorscheme-cardradio">
        <div class="row">

            <div class="col-3">
                <div class="form-check card-radio p-0">
                    <input class="form-check-input" type="radio" name="data-layout-mode"
                        id="layout-mode-light" value="light" />
                    <label class="form-check-label avatar-md w-100" for="layout-mode-light">
                        <img style="width: 100%;height:40%"
                            src="{{ asset('backend/assets/img/vertical.png') }}"
                            alt="img" />
                    </label>
                </div>
                <h6 style="font-weight: 600" class="fs-13 text-center mt-2 mb-2">Light</h6>
            </div>
            <div class="col-3">
                <div class="form-check card-radio dark p-0">
                    <input class="form-check-input" type="radio" name="data-layout-mode"
                        id="layout-mode-dark" value="dark" />
                    <label class="form-check-label avatar-md w-100" for="layout-mode-dark">
                        <img style="width: 100%;height:40%"
                            src="{{ asset('backend/assets/img/vertical.png') }}"
                            alt="img" />
                    </label>
                </div>
                <h6 style="font-weight: 600" class="fs-13 text-center mt-2 mb-2">Dark</h6>
            </div>
           
            <div class="col-4 d-none">
                <div class="form-check card-radio maroon p-0">
                    <input class="form-check-input" type="radio" name="data-layout-mode"
                        id="layout-mode-maroon" value="maroon" />
                    <label class="form-check-label avatar-md w-100" for="layout-mode-maroon">
                        <img src="assets/img/vertical.png" alt="img" />
                    </label>
                </div>
                <h5 class="fs-13 text-center mt-2 mb-2">Brink Pink</h5>
            </div>
            <div class="col-4 d-none">
                <div class="form-check card-radio purple p-0">
                    <input class="form-check-input" type="radio" name="data-layout-mode"
                        id="layout-mode-purple" value="purple" />
                    <label class="form-check-label avatar-md w-100" for="layout-mode-purple">
                        <img src="assets/img/vertical.png" alt="img" />
                    </label>
                </div>
                <h5 class="fs-13 text-center mt-2 mb-2">Green</h5>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="layout-head pb-3">
        <h6 style="font-weight: 600">Layout:</h6>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="form-check card-radio p-0">
                <input id="customizer-layout01" name="data-layout" type="radio"
                    value="vertical" class="form-check-input" />
                <label class="form-check-label avatar-md w-100" for="customizer-layout01">
                    <img style="width: 100%;height:40%"
                        src="{{ asset('backend/assets/img/vertical.png') }}"
                        alt="img" />
                </label>
            </div>
            <h6 style="font-weight: 600" class="fs-13 text-center mt-2">Vertical</h6>
        </div>
        <div class="col-3">
            <div class="form-check card-radio p-0">
                <input id="customizer-layout02" name="data-layout" type="radio"
                    value="horizontal" class="form-check-input" />
                <label class="form-check-label avatar-md w-100" for="customizer-layout02">
                    <img style="width: 100%;height:40%"
                        src="{{ asset('backend/assets/img/vertical.png') }}"
                        alt="img" />
                </label>
            </div>
            <h6 style="font-weight: 600" class="fs-13 text-center mt-2">Horizontal</h6>
        </div>
        <div class="col-4 d-none">
            <div class="form-check card-radio p-0">
                <input id="customizer-layout03" name="data-layout" type="radio"
                    value="twocolumn" class="form-check-input" />
                <label class="form-check-label avatar-md w-100" for="customizer-layout03">
                    <img style="width: 100%;height:40%"
                        src="{{ asset('backend/assets/img/vertical.png') }}"
                        alt="img" />
                </label>
            </div>
            <h6 style="font-weight: 600" class="fs-13 text-center mt-2">Two Column</h6>
        </div>
    </div>
</div>
@endsection
