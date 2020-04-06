@extends('admin.layouts.app')

@section('content')

    
    <div class="container-fluid">
        {{--Leaderboard and HUD--}}
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-white bg-dark">
                    <div class="card-header">Actieve werknemers</div>
                    <div class="card-body">
                        <h4 class="text-center">4</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark">
                    <div class="card-header">Current sales leader</div>
                    <div class="card-body">
                        <h4 class="text-center">John Doe</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark">
                    <div class="card-header">Sales For Month</div>
                    <div class="card-body"><h4 class="text-center">5</h4></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark">
                    <div class="card-header">Total sales value</div>
                    <div class="card-body"><h4 class="text-center">24.004,25</h4></div>
                </div>
            </div>
               
                
               
            </div>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <div class="card text-white bg-dark">
                        <div class="card-header">Unassigned Prospects</div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                            @for($i = 0; $i < 7; $i++)
                                <li class="list-group-item bg-dark">
                                    Mr. Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                                </li>
                            @endfor
                            <li class="list-group-item bg-dark">
                                <a href="" class="btn btn-block btn-md btn-light">View all unassigned Leads</a>
                            </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-white bg-dark">
                        <div class="card-header">
                            Recent Estimates
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @for($i = 0; $i < 7; $i++)
                                <li class="list-group-item bg-dark">
                                    <div class="row">
                                        <div class="col-sm-4">Mr. Prospect</div>
                                        <div class="col-sm-4">5 Jan 2020</div>
                                        <div class="col-sm-4">Value: 4334,04
                                            <span class="float-right btn btn-sm btn-success">details</span>
                                        </div>
                                    </div>
                                </li>
                                @endfor
                                <li class="list-group-item bg-dark">
                                    <a href="" class="btn btn-block btn-md btn-light">View all unassigned Leads</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection