<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function ajax(Request $request) {

        $data = Fact::where('id', 'like', '%'.$request->search.'%')
            ->orWhere('title', 'like', '%'.$request->search.'%')->get();

        if($request->ajax()){

            return response()->json([
                'data' => $data->split(3)
            ]);
        }
    }
}
