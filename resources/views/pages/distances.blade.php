@extends('layouts.app')
@section('content')
  

    <div class="container">
    <div class="page-title text-dark p-3">
            Club Distances
        </div>
        <table class="table bg-light table-striped">
            <thead class="bg-green">
                <tr>
                    <th>Club</th>
                    <th>Avg Distance (yds)</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                    {!! Form::open(['action' => 'Distances@distances', 'method' => 'POST']) !!}

                <?php $table_row_count = 0;?>
                @foreach($default_clubs as $default_club)
                @php
                    $distance_total = 0;
                    $club_count = 0;
                    $club_item = $default_club->club;
                    
                @endphp
                <tr>
                    <td><a href="showclub/{{$club_item}}" class="club-table-title">{{$club_item}}</a></td>
                        @foreach($clubs as $user_club)
                            @php
                                $row_count      = 0;
                                $club           = $user_club->club;
                                $club_distance  = $user_club->distance;
                            @endphp
                            @if($club == $club_item)
                                @if(++$row_count == 10)
                                    @php
                                    continue;
                                    @endphp
                                @endif
                                @php
                                    $distance_total+=$club_distance;
                                    $club_count++;
                                    @endphp
                                @endif
                            @endforeach
                            @if($distance_total < 1)
                                @php
                                @endphp
                                <td>-</td>
                                <td></td>
    

                                @else
                            @php
                                $distance = $distance_total/$club_count;
                                $distance = number_format($distance, 2);
                                $table_row_count++;

                            @endphp
                            
                            <td>{{$distance}}</td>
                            <td>
                                <input type="text" value="{{$club_item}}" name="club_item{{$table_row_count}}" hidden>
                                <button class="btn btn-light btn-outline-success" value="btn-reset{{$table_row_count}}" name="btn-reset{{$table_row_count}}" type="submit">Clear</button>
                            </td>
                            @endif 
                </tr>
                @endforeach
                {{Form::hidden('_method', 'GET')}}

                {!! Form::close() !!}

            </tbody>
        </table>
    </div>
@endsection