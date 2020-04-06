@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Welkom {{ Auth::user()->name }}</h2>
        </div>
        <div class="card-body">
            <h5>{{ Auth::user()->name }}</h5>
            <h5>{{ Auth::user()->email }}</h5>
            <h5>{{ Auth::user()->role }}</h5>
        </div>
    </div>
</div>
@endsection
