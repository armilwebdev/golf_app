<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\GolfClubs;
Use DB;

class BagController extends Controller
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
        return view('pages.dashboard')->with('clubs', $clubs);
    }

    public function modify_bag()
    {
        $user_id = auth()->user()->id;
        $clubs =  GolfClubs::where('user_id', $user_id)->get();
        $check_clubs = array(
            "one" => "1-iron",
            "two" => "2-iron"
        );
        $check = count($check_clubs);

        return view('pages.modify_bag', compact('clubs', 'check_clubs'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'club' => 'required'
        ]);


       $user_id = auth()->user()->id;
            $clubs = $request->input('club');
            if(empty($clubs)){
                $empty = "No Clubs Selected";
                return $empty;
            }
            else{
                // Delete Current Clubs before Adding New Clubs
                GolfClubs::where('user_id', $user_id)->delete();
                
                foreach($clubs as $club){
                    $post = new GolfClubs;
                    $post->user_id = auth()->user()->id;
                    $post->club = $club;
                    $post->save();
                }
            }
            return redirect('/dashboard')->with('success', 'Golf Bag Updated');
                
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
