<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Guest;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function MongoDB\BSON\toJSON;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $category)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user_id = Auth::check() ? Auth::user()->id : null;

        if( $request->email ){
            $find_guest = Guest::where('email', $request->email)->first();
            $guest = $find_guest ? Guest::create(['email' => $request->email]) : $find_guest;
            $guest_id = $guest->id;
        } else{
            $guest_id = null;
        }

        Fact::create([
            'title' => $request->title,
            'description' => $request->description,
            'fact_category_id' => $request->category,
            'user_id' => $user_id,
            'guest_id' => $guest_id
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fact  $facts
     */
    public function show()
    {
        $facts = Fact::withCount(['likes as likes', 'dislikes as dislikes'])->get();
        $facts_row = $facts->split(3);

        return view('pages.facts', ['facts_row' => $facts_row, 'user_vote' => Auth::user()->votedPosts()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fact  $facts
     * @return \Illuminate\Http\Response
     */
    public function edit(Fact $facts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fact  $facts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fact $facts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fact  $facts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fact $facts)
    {
        //
    }
}
