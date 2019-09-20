<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use DB;
use Session;
use App\Modules\Shared\Models\Role;
use App\Modules\Shared\Models\Permission;
use App\Modules\Shared\Models\User;
use Notification;
use Auth;

use App\Http\Controllers\Controller;

class PermissionsController extends Controller
{
    public function roles()
    {
      if(!Auth::user()->can('Manage Roles'))
      {
        abort(403);
      }
      $roles = Role::all();
      return view('admin::roles.index',compact('roles'));
    }

    public function permissions()
    {
      if(!Auth::user()->can('Manage Permissions'))
      {
        abort(403);
      }
      $permissions = Permission::all();
      $newest = Permission::orderBy('tokenid','desc')->first();
      return view('admin::permissions.index',compact('permissions','newest'));
    }

    public function SaveRole(Request $request)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
        $validator = Validator::make(request()->all(),
          [
            'secrolename' => 'required|unique:securityroles',
          ]);
        if ($validator->fails()) {
              flash($validator->errors())->error()->important();
                return back();
        }
        $role = new Role;
        $role->secrolename = $request->secrolename;
        $role->save();

        flash('Successfully added new role')->success()->important();
        return redirect()->route('admin.roles.index');
    }

    public function DeleteRole($secroleid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $role = Role::findOrFail($secroleid);

      //check if user is assigned role
      if($role->users->isEmpty())
      {
        $role->permissions()->detach();
        $role->delete();
        flash('Successfully deleted role: ')->success()->important();
        return redirect()->route('admin.roles.index');
      }
      else if(!$role->users->isEmpty())
      {
        flash('Cannot Delete role: '.$role->secrolename.' because users are assigned to it')->error()->important();
        return redirect()->route('admin.roles.index');
      }
    }

    public function EditRole($secroleid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $role = Role::findOrFail($secroleid);
      $permissions = Permission::all();
      $assigned_permissions = $role->permissions->pluck('tokenid')->all();
      return view('admin::roles.edit',compact('role','permissions','assigned_permissions'));
    }

    public function UpdateRole($secroleid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $validator = Validator::make(request()->all(),
        [
          'secrolename' => 'required|unique:securityroles',
        ]);
      if ($validator->fails()) {
            flash($validator->errors())->error()->important();
              return back();
      }
      $role = Role::findOrFail($secroleid);
      $role->secrolename = request()->input('secrolename');
      $role->save();
      flash('Successfully updated role: ')->success()->important();
      return redirect()->route('admin.roles.edit',$secroleid);
    }

    public function AddRole($secroleid,$tokenid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $role = Role::findOrFail($secroleid);
      $role->permissions()->attach($tokenid);
      flash('Successfully attached permission ')->success()->important();
      return redirect()->route('admin.roles.edit',$secroleid);

    }

    public function RemoveRole($secroleid,$tokenid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $role = Role::findOrFail($secroleid);
      $role->permissions()->detach($tokenid);
      flash('Successfully removed permission ')->success()->important();
      return redirect()->route('admin.roles.edit',$secroleid);

    }

    public function SavePermission(Request $request)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $validator = Validator::make(request()->all(),
        [
          'tokenname' => 'required|unique:securitytokens',
          'tokenid' => 'required|numeric|unique:securitytokens',
        ]);
      if ($validator->fails()) {
            flash($validator->errors())->error()->important();
              return back();
      }
      $permission = new Permission;
      $permission->tokenname = $request->tokenname;
      $permission->tokenid = $request->tokenid;
      $permission->save();

      flash('Successfully added new permission')->success()->important();
      return redirect()->route('admin.permissions.index');
    }

    public function EditPermission($tokenid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $permission = Permission::findOrFail($tokenid);
      return view('admin::permissions.edit',compact('permission'));
    }

    public function UpdatePermission($tokenid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $validator = Validator::make(request()->all(),
        [
          'tokenname' => 'required|unique:securitytokens',

        ]);
      if ($validator->fails()) {
            flash($validator->errors())->error()->important();
              return back();
      }
      $permission = Permission::findOrFail($tokenid);
      $permission->tokenname = request()->input('tokenname');
      $permission->tokenid = request()->input('tokenid');
      $permission->save();

      flash('Successfully updated permission')->success()->important();
      return redirect()->route('admin.permissions.edit',$tokenid);
    }

    public function DeletePermission($tokenid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $permission = Permission::findOrFail($tokenid);
      //check if permission is being used in a role
      if($permission->roles->isEmpty())
      {
        $permission->delete();
        flash("Successfully deleted permission ")->success()->important();
        return redirect()->route('admin.permissions.index');

      }
      else if(!$permission->roles->isEmpty())
      {
        flash("Cannot delete permission because it is being used by a role ")->error()->important();
        return redirect()->route('admin.permissions.index');

      }
    }

}
