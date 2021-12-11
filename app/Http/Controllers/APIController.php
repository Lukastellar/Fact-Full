<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
    public function ajax(Request $request) {

        if($request->ajax()){
            $data = Fact::where('id', 'like', '%'.$request->search.'%')
                ->orWhere('title', 'like', '%'.$request->search.'%')->get();

            return response()->json([
                'data' => $data->split(4)
            ]);
        }

    }

    public function liker(Request $request){
        $user = Auth::user();

        return response()->json([
            'data' => $request->request
        ]);

        $user->votedPosts()->attach($request->fact_id, ['is_like' => $request->vote]);
    }
}
