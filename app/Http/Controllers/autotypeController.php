<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autotypeController extends Controller
{
        public function resultimpo(Request  $request)
    {
        $result=\App\category::where('name', 'LIKE', "%{$request->input('query')}%")->get();

        return response()->json($result);
    }
}
