@extends('backend.pages.users.layout')
@section('menu-title', 'Balance')
@section('css')
    <style>
        .cardd {
            display: flex;
            flex-direction: row
        }

        .border-third {
            border-color: rgb(56, 56, 56);
        }

        .border-r {
            border-right-width: solid 1px;
            border-color: rgb(56, 56, 56);

        }

        .pr-4 {
            padding-right: 1rem;
        }

        .font-extrabold {
            font-weight: 800;
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
    </style>

@endsection
@section('page-content')
    <div class="card">
        <div class="card-body cardd">
            <div class="avatar " style="margin-x: -10px">
                <i class="avatar-title rounded-circle border fa fa-wallet"></i>
            </div>
            <div class="px-4 border-r border-third" >
                <div class="font-semibold text-secondary">
                    <h6>Total Balance</h6>
                </div>
                <div class="text-lg font-extrabold text-brand">NGN&nbsp;0.00</div>
            </div>
            <div class="px-4">
                <div class="font-semibold text-secondary">
                    <h6>Bonus Balance</h6>
                </div>
                <div class="text-title text-lg font-extrabold">NGN&nbsp;0.00</div>
            </div>
           
        </div>
    </div>

@endsection
