<?php

namespace App\Modules\Professional\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Modules\Professional\Models\Professional;

class FrontController extends Controller
{
    public function list()
    {
      $professionals = Professional::all();
      return view('professional::frontend.pro.list',compact('professionals'));
    }
    public function ViewPro($id)
    {
      $professional = Professional::findOrFail($id);
      return view('professional::frontend.pro.view',compact('professional'));
    }
}
