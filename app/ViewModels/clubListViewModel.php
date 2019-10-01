<?php
use Illuminate\Database\Eloquent\Model;

namespace App\ViewModels;
use App\ClubDistances;
use App\clubs;


class clubListViewModel
{
    protected $table = 'clubs';

    public function viewmodel($request){


        $user_id = auth()->user()->id;
        $clubs =  ClubDistances::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        $default_clubs = clubs::all();

        $request = '
        <?php echo $start = "start"; echo $start;?>
       
        ';
        
        

        return $request;
    }

    

}
