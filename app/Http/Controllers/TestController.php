<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create(Request $request)
    {
       // dd(($request->all()));
        Test::create($request->all());
        return response()->json(['message'=>'data insert successfully'],200);
    }
}
