<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
    public function posts(Request $request) {
        $search = $request->search;

        // TODO: nastavi ovde
        if($request->ajax()){
            $data = Fact::withCount(['likes as likes', 'dislikes as dislikes'])
                ->where('id', 'like', '%'.$search.'%')
                ->orWhere('title', 'like', '%'.$search.'%')
                ->get();
            $user_vote = Auth::user()->votedPosts()
                ->where('id', 'like', '%'.$search.'%')
                ->orWhere('title', 'like', '%'.$search.'%')
                ->get();

            return response()->json([
                'data' => $data->split(3),
                'user_vote' => $user_vote
            ]);
        }

    }

    public function liker(Request $request){
        $fact_id = $request->fact_id;
        $vote_val = $request->vote_val;
        $user = Auth::user();

        if($request->ajax()){
            Like::updateOrCreate([
                'fact_id' => $fact_id,
                'user_id' => $user->id,
            ], [
                'is_like' => $vote_val,
            ]);
        return 'Success';
        }
        return 'Something went wrong!';
    }
}
