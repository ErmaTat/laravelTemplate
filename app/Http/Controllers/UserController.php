<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=[
            'users'=>User::all()
        ];
        return view('backend.pages.users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $data=[
            'user'=>Auth::user()
        ];
        return view('backend.pages.users.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function password()
    {
        //
        $data=[
            'user'=>Auth::user()
        ];
        return view('backend.pages.users.password',$data);
    }

    public function appsettings()
    {
        //
        $data=[
            'user'=>Auth::user()
        ];
        return view('backend.pages.users.app-settings',$data);
    }

    public function balance()
    {
        //
        $data=[
            'user'=>Auth::user()
        ];
        return view('backend.pages.users.balance',$data);
    }

    public function deposit()
    {
        //
        $data=[
            'user'=>Auth::user()
        ];
        return view('backend.pages.users.deposit',$data);
    }

    public function withdraw()
    {
        //
        $data=[
            'user'=>Auth::user()
        ];
        return view('backend.pages.users.withdraw',$data);
    }


}
