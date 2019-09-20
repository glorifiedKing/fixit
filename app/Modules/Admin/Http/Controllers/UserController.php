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
use App\Modules\Shared\Models\InventoryLocation;
use Notification;
use Auth;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function users()
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $users = User::all();
      return view('admin::users.index',compact('users'));
    }

    public function CreateUser()
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $roles = Role::all();
      $company_locations = InventoryLocation::all();
      return view('admin::users.create',compact('roles','company_locations'));
    }

    public function SaveUser(Request $request)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $validatedData = $request->validate([
        'realname' => 'required|max:100',
        'userid' => 'required|unique:www_users',
        'email' => 'required|email|unique:www_users',
        'password' => 'required|min:5',
      ]);
      $salesman = '';
  		$modulesallowed = '0,0,0,0,0,0,0,0,0,0,0';
  		$branchcode = '';
      $user = new User;
      $user->userid = $request->userid;
  		$user->phone = $request->phone;
  		$user->email=$request->email;
  		$user->realname=$request->realname;
  		$user->email=$request->email;
  		$user->salesman = $salesman;
  		$user->defaultlocation = $request->defaultlocation;
  		$user->fullaccess = $request->fullaccess;
  		$user->branchcode = $branchcode;
  		$user->modulesallowed = $modulesallowed;
      $user->theme = $request->theme;
  		$user->password=password_hash($request->password,PASSWORD_DEFAULT);
  		$user->save();

      flash("Successfully Created User")->success()->important();
      return redirect()->route('admin.users.index');
    }

    public function EditUser($userid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $user = User::findOrFail($userid);
      $roles = Role::all();
      $company_locations = InventoryLocation::all();
      return view('admin::users.edit',compact('user','roles','company_locations'));

    }

    public function UpdateUser(Request $request,$userid)
    {
      if(!Auth::user()->can('User Management and System Administration'))
      {
        abort(403);
      }
      $validatedData = $request->validate([
        'realname' => 'required|max:100',
        'userid' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:5',
      ]);
      $salesman = '';
  		$modulesallowed = '0,0,0,0,0,0,0,0,0,0,0';
  		$branchcode = '';
      $user = User::findOrFail($userid);
      //$user->userid = $request->userid;
  		$user->phone = $request->phone;
  		$user->email=$request->email;
  		$user->realname=$request->realname;
  		$user->email=$request->email;
  		$user->salesman = $salesman;
  		$user->defaultlocation = $request->defaultlocation;
  		$user->fullaccess = $request->fullaccess;
  		$user->branchcode = $branchcode;
  		$user->modulesallowed = $modulesallowed;
      $user->theme = $request->theme;
  		$user->password=password_hash($request->password,PASSWORD_DEFAULT);
  		$user->save();

      flash("Successfully Updated User")->success()->important();
      return redirect()->route('admin.users.index');
    }

    public function DeleteUser($userid)
    {
      $user = User::findOrFail($userid);

      //add checks for several things..
      $user->delete();
      flash("Successfully Deleted User")->success()->important();
      return redirect()->route('admin.users.index');
    }



}
