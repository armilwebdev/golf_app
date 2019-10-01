@extends('layouts.app')
@section('content')
    <div class="golf-cover"></div>
    <div class="container bg-none">

        <div class="col-md-12 col-sm-12 mb-4">
            <div class="card pr-0 pl-0" >
                <span class="card-header dashboard-card-header">Modify Bag</span>
                <div class="card-body bg-green">

                        {!! Form::open(['action' => 'BagController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                        </div>
                        <div class="row">
                            <div class="col-md-12 page-description">
                                Modify your bag here<br>
                                Current Clubs: {{ count($clubs) }}
                            </div>
                        </div>
                
                            <div class="row">
                                
                                    <div class="col-md-4 mt-4">
                                    <div class="club-title">
                                        Drivers and Woods
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Driver" name="club[]" id="driver"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "Driver")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="driver">
                                            Driver
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5-Wood" name="club[]"  id="5wood" 
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "5-Wood")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="5wood">
                                            5-Wood
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3-Wood" name="club[]" id="3wood"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "3-Wood")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="3wood">
                                            3-Wood
                                        </label>
                                    </div>
                                </div>
                
                            {{-- IRONS --}}
                            <div class="col-md-4 mt-4">
                                    <div class="club-title">
                                        Irons
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="1-iron" id="1iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "1-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="1iron">
                                            1-iron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="2-iron" id="2iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "2-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="2iron">
                                            2-iron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="3-iron" id="3iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "3-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="3iron">
                                            3-iron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="4-iron" id="4iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "4-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="4iron">
                                            4-iron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="5-iron" id="5iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "5-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="5iron">
                                            5-iron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="6-iron" id="6iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "6-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="6iron">
                                            6-iron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="7-iron" id="7iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "7-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="7iron">
                                            7-iron 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="8-iron" id="8iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "8-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="8iron">
                                            8-iron
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="club[]" value="9-iron" id="9iron"
                                            @foreach($clubs as $club)
                                                {{ $equipped =  $club->club }}   
                                                @if($equipped == "9-iron")
                                                    checked
                                                @endif
                                            @endforeach
                                        />
                                        <label class="form-check-label" for="9iron">
                                            9-iron
                                        </label>
                                    </div>
                                </div>
                                {{-- Wedges --}}
                                <div class="col-md-4 mt-4">
                                    <div class="club-title">
                                        Wedges
                                    </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="club[]" value="PW" id="pwiron"
                                    @foreach($clubs as $club)
                                        {{ $equipped =  $club->club }}   
                                        @if($equipped == "PW")
                                            checked
                                        @endif
                                    @endforeach
                                    />
                                    <label class="form-check-label" for="pwiron">
                                        PW
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="club[]" value="SW" id="swiron"
                                        @foreach($clubs as $club)
                                            {{ $equipped =  $club->club }}   
                                            @if($equipped == "SW")
                                                checked
                                            @endif
                                        @endforeach
                                    />
                                    <label class="form-check-label" for="swiron">
                                        SW
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-5 col-md-12">
                                <div class="col-md-12 button-links">
                                    <button class="btn btn-lg right btn-primary" type="submit" name="submit">Equip</button>
                                </div>
                            </div>
                
                        {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>
@endsection