<?php

namespace App\Modules\Professional\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Modules\Professional\Models\Professional;

class ProfessionalController extends Controller
{
    public function list()
    {
      //check permissions first
      if(!auth()->user()->can('ViewProfessionals'))
      {
        abort(403);
      }

      $is_professional = auth()->user()->getRoleNames()->contains('Professional');
      if($is_professional)
      {
        $professionals = Professional::where('id',auth()->user()->fixituser->id)->get();
      }
      else {
        $professionals = Professional::all();  // modify later for pagination
      }
    //  dd($professionals);
      return view('professional::backend.pro.list',compact('professionals'));
    }
}
