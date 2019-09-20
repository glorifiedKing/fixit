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
use Module;

use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function index()
    {
      /*if(!Auth::user()->can('Manage System'))
      {
        abort(403);
      }*/
      $modules = Module::all()->except('Shared');
    //  dd($modules);
      return view('admin::modules.index',compact('modules'));
    }

    public function activate($module_name)
    {
      if(!Auth::user()->can('Manage System'))
      {
        abort(403);
      }
      Module::enable($module_name);
      return back();
    }

    public function deactivate($module_name)
    {
      if(!Auth::user()->can('Manage System'))
      {
        abort(403);
      }
      Module::disable($module_name);
      return back();
    }

    public function IncreaseOrder($module_name)
    {
      if(!Auth::user()->can('Manage System'))
      {
        abort(403);
      }
      $current_order = Module::get($module_name.'::order');
      $new_order = ($current_order > 1) ? $current_order-1 : $current_order;

      //change module that has previous order
      if($current_order != $new_order)
      {
        $previous_module = Module::where('order', $new_order);
        Module::set($previous_module['slug'].'::order',$current_order);
      }
      Module::set($module_name.'::order',$new_order);
      return back();
    }



}
