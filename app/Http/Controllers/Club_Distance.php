<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use App\GolfClubs;
use App\ClubDistances;
use App\clubs;
// use App\ViewModels\clubListViewModel;

Use DB;

class Club_Distance extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $user_id = auth()->user()->id;
        $clubs =  GolfClubs::where('user_id', $user_id)->get();
        $last_club =  ClubDistances::where('user_id', $user_id)->orderBy('created_at', 'desc')->first();
        

        return view('pages.club_distance', compact('clubs', 'last_club'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'distance' => 'required'
        ]);
        $user_id = auth()->user()->id;
        $club = $request->input('club');
        $distance = $request->input('distance');

        if(empty($club)){
            $empty = "No Clubs Selected";
            return $empty;
        }
        else{
                $post = new ClubDistances;
                $post->user_id = auth()->user()->id;
                $post->distance = $distance;
                $post->club = $club;
                $post->save();
            }
            return redirect('/club_distance');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function showclub()
    {
     return view('pages.showclub');   
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
