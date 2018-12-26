<?php

namespace App\Http\Controllers\Admin\AccessControl;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all();
        $roles = Role::get()->pluck('name', 'name');
        return view('admin.accesscontroll.users', compact('users','roles'));
      
    }

    
    public function create()
    {
        //
    }

    
    public function store(UserStoreRequest $request) {   
        //dd($request);

        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $user = User::create($request->all());
        $roles = $request->input('roles') ? $request->input('roles') : [];
        //dd($roles);
        $user->assignRole($roles);

        return redirect()->route('user.index')->with('message', 'User added successfully');
    }

    

   
    public function edit($id) {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');
        $user = User::findOrFail($id);

        return view('admin.accesscontroll.useredit', compact('user', 'roles'));
    }

    
    public function update(UserUpdateRequest $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
        $user->update($request->all());
        $roles = $request->input('roles') ? $request->input('roles') : [];
        $user->syncRoles($roles);

        return redirect()->route('user.index')->with('message', 'User updated successfully');;;
    }

   
    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('deleted', 'User deleted successfully');;;
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = User::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}