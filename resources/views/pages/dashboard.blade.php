@extends('layouts.app')
@section('content')
    <div class="golf-cover">
    </div>
        <div class="container dashboard-container bg-none">
        <div class="row">
            <div class="col-md-12 page-title text-center">
                    Dashboard
            </div>
        </div>
        <div class="row justify-content-center">

            {{-- Golf Bag --}}
            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card pr-0 pl-0 bg-none" >
                    <span class="card-header dashboard-card-header">Golf Bag</span>
                    <div class="card-body  bg-green">
                        <span class="card-desc">Current Clubs - <b>{{count($clubs)}}</b></span>
                        <p class="card-text">
                        <div class="accordion" id="accordionExample">
                            <a href="/modify_bag" class="btn btn-orange">Modify Bag</a><br>
                            <button class="btn btn-link text-primary bold" style="font-size:1em;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                View Clubs
                            </button>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                    <ul class="golf-clubs-list list-group list-group-flush bg-green border">
                                        
                                        @foreach($clubs as $club)
                                            <li class="list-group-item bg-green">{{ $club->club }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </p>
                        
                    </div>
                </div>
            </div>

            {{-- Golf Range --}}
            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card pr-0 pl-0 bg-none" >
                    <span class="card-header dashboard-card-header">Golf Range</span>
                    <div class="card-body bg-green">
                        <p class="card-text">
                            <span class="card-desc">Record your club distances</span>
                        </p>
                        <a href="/club_distance" class="btn btn-orange">Go</a>
                    </div>
                </div>
            </div>

            {{-- Distances --}}
            <div class="col-md-4 col-sm-12 mb-4">
                <div class="card pr-0 pl-0 bg-none" >
                    <span class="card-header dashboard-card-header">Club Distance</span>
                    <div class="card-body bg-green">
                        <p class="card-text">
                            <span class="card-desc">View distance avg for each club</span>
                        </p>
                        <a href="/distances" class="btn btn-orange">Go</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection