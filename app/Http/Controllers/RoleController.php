<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:role-list')->only(['index', 'show']);
        $this->middleware('permission:role-create')->only(['create', 'store']);
        $this->middleware('permission:role-edit')->only(['edit', 'update']);
        $this->middleware('permission:role-delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::orderBy('id','DESC')->get();
        return view('backend.pages.roles.index',compact('roles'));
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
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $role = Role::create(['name' => $request->input('name')]);
        return back()->with('success','Role created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $request->validate([
            'name' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        return back()->with('success','Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::find($id);
        if ($role) {
            if ($role->users()->count() > 0) {
                return back()->with('error', 'Cannot delete role because it is assigned to one or more users.');
            }
            $role->delete();
            return back()->with('success','Role deleted successfully');
        }else{
            return back()->with('error','Role not found');
        }
        
    }

    public function permission(Request $request, string $name)
    {
        $role = Role::where('name', $name)->first();
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $role->id)
            ->get();

        $freePermissions = Permission::whereNotIn('id', function ($query) use ($role) {
            $query->select('permission_id')
                ->from('role_has_permissions')
                ->where('role_id', $role->id);
        })->get();

        return view('backend.pages.roles.permissions', compact('role', 'freePermissions', 'rolePermissions'));
    }


    public function updpermission(Request $request, string $name)
    {
        $role = Role::where('name', $name)->first();

        if ($role) {
            foreach ($request->permissions as $permissionName) {
                $permission = Permission::where('name', $permissionName)->first();
                if ($permission && !$role->hasPermissionTo($permission)) {
                    $role->givePermissionTo($permission);
                }
            }
            return back()->with('success', 'Permissions added successfully.');
        }

        return back()->with('error', 'Role not found.');
    }


    public function rempermission(Request $request, string $name){
        $role = Role::where('name',$name)->first();
        $role->revokePermissionTo($request->permission);
        return back()->with('success','Permissions has been revoked');
    }
}
