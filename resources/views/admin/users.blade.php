@extends('admin.layouts.app')

@section('content')

    
    <div class="container-fluid">
        <div class="row">
       <div class="col-sm-6 col-md-6 col-lg-4">
           @if (session('success'))
           <div class="alert alert-success">
                {{ session('success') }}
           </div>
               
            @endif
           <div class="card text-white bg-dark">
               <div class="card-body">
                   <button class="btn btn-primary btn-block" id="show-new-user-form">Add a new user</button>
                    @component('admin.layouts.components.forms.add_user')
                
                    @endcomponent
               </div>
           </div>
           
       </div>
    
    <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="card text-white bg-dark">
            <div class="card-header">
                Current users
            </div>
            <ul class="list-group list-group-flush bg-dark">
                @if($users)
                    @foreach($users as $user)
            <li class="list-group-item list-group-item-dark"><a class="text-dark" href="{{ route('admin.user', $user->id) }}">{{ $user->name }}</a> <span class="float-right">{{ $user->role }}</span></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
            
</div>
</div>

    {{-- end Container --}}
@endsection

@push('admin.layouts.scripts.scripts')
<script src="{{ asset('js/admin/users.js') }}"></script>
@endpush