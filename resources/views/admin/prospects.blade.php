@extends('admin.layouts.app')

@section('content')
    
    <div class="row">

        @foreach ($prospects as $prospect)
            
    <a href="{{ route('admin.prospect', ['id' => $prospect->id]) }}" class="col-md-3 offset-md-2" style="text-decoration: none; color: #000;">
            <div >
                <div class="card mt-3 bg-dark text-white">
                    <div class="card-header">
                        {{ $prospect->name }}
                    </div>
                    <div class="card-body">
                        <h6>{{ $prospect->email }}</h6>
                        <h6>{{ $prospect->phone }}</h6>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    {{-- END ROW --}}
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="text-center">
                {{ $prospects->links() }}
            </div>
        </div>
    </div>
@endsection