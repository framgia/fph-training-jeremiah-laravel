<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $users, Role $roles)
    {
        return view('admin.role.index', ['users' => $users->showAllUsers(), 'roles' => $roles->showAllRoles()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Role $role)
    {
        $role->storeRole($request->rolename, $request->roledesc);

        return redirect(route('role.index'))->with('status', 'You have successfully added a Role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->updateRole($request->rolename, $request->rolecontent);

        return redirect(route('role.show', ['role' => $role]))->with('status', 'Successfully updated Role');
    }

    public function assign(Request $request)
    {
        $userId = User::find($request->users);
        $roleId = $request->role_id;   

        $userId->role_id = $roleId;
        $userId->save();

        return redirect('roles')->with('status', 'You have successfully assigned a Role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect(route('role.index'))->with('status', 'Successfully Deleted the role');
    }
}
