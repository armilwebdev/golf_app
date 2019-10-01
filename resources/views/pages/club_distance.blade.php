@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-title text-center">
                    Club Distance
            </div>
        </div>
        {!! Form::open(['action' => 'Club_Distance@store', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-sm-12 col-md-4 page-description text-center mx-auto ">
                Input your Club Distance
                <br>
                <table class="mx-auto">
                <tr>
                    <td><span style="margin-top:5px;">Previous:</span></td>
                    <td><span style="border-bottom:2px solid green;" class="bold">
                    @php         
                        if(!$last_club){
                            echo "No Previous Found";
                        }
                        else{
                            echo $last_club->club;
                        }
                    @endphp
                    </span></td>
                </tr>
                    <tr>
                        <td></td>
                        <td> <span class="bold">
                        @php         
                        if(!$last_club){
                            echo "--";
                        } else{
                            echo $last_club->distance;
                        }
                        @endphp
                            yds 
                        </span></td>
                    </tr>
                </table>
            </div>
            <div class=" col-sm-12 page-description text-center">
                <input type="number" class="input_club_distance col-sm-12 col-md-5" min="1" name="distance" >
            </div>
        </div>
        <div class="row mb-4 mt-1">
            <div class=" form-check mx-auto col-sm-6 col-md-3">
                        <select class="form-control select-distance" name="club">
                            @foreach($clubs as $club)
                             <option value="{{$club->club}}" class="option-distance" 
                                <?php
                                        if(!$last_club){
                                        }
                                        elseif($last_club->club == $club->club){
                                            echo "selected";
                                        }
                                ?>
                            >
                            {{$club->club}}
                            </option>
                            @endforeach
                        </select>
                    </div>
        </div>
        <div class="row">
            <button class="btn  mx-auto btn-success save-distance col-sm-12 col-md-3">Save</button>
        </div>
        {!! Form::close() !!}

@endsection