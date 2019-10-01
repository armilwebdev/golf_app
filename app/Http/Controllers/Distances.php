<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GolfClubs;
use App\ClubDistances;
use App\clubs;
// use App\ViewModels\clubListViewModel;

Use DB;

class Distances extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/distances');
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
        //
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

    public function distances(Request $request)
    {
        $user_id = auth()->user()->id;
        $clubs =  ClubDistances::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        $default_clubs = clubs::all();
       
        $club_count = count($default_clubs);

        for($x = 0; $x<=$club_count; $x++){
        if($request->input('btn-reset'.$x.'')){
            $bb = $request->input('club_item'.$x.'');
            // echo   "<div class='alert alert-success'>Avg distance for ".$bb." Removed</div>";
            ClubDistances::where([
                ['user_id', '=', $user_id],
                ['club', '=', $bb],
            ])->delete();
            return redirect('distances');

            }
            else{ 
                continue;
            }

        }
        return view('pages.distances', compact('clubs', 'default_clubs'));
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
        return view('/distances');
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
