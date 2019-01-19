<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class autotypeController extends Controller
{
        public function resultimpo(Request  $request)
    {
        $result=\App\model\admin\category::where('name', 'LIKE', "%{$request->input('query')}%")->get();

        return response()->json($result);
    }
}
