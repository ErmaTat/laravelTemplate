<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User};
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=[
            'users'=>User::withTrashed()->get(),
            'roles'=>Role::all()
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole([$request->role]);
        return back()->with('success','User Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $user=Auth::user();
        $data=[
            'user'=> $user
        ];
        return view('backend.pages.users.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user=User::find($id);
        $data=[
            'user'=> $user
        ];
        return view('backend.pages.users.show',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);

        $user = User::find($id);
        $user->update($request->all());
        return back()->with('success','User Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return back()->with('success','User Deleted Successfully');
    }

    public function restore(string $id)
    {
        //
        $user = User::withTrashed()->find($id);
        $user->restore();
        return back()->with('success','User account restored Successfully');
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


    public function updatepassword(Request $request,string $id)
    {
        $user=User::find($id);   
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'Password updated successfully');
    }

    public function twofactor(){
        return view('backend.pages.users.two-factor');
    }


}
