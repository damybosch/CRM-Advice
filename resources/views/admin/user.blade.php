@extends('admin.layouts.app')

@section('content')

    
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- @if ($errors)
            {{ $errors }}
        @endif --}}
        <div class="row">
            
       <div class="col-sm-6 col-md-6 col-lg-4">
           <div class="card text-white bg-dark">
               <div class="card-header">
                <h3>{{ $user_data->name }}</h3>
               </div>
               <div class="card-body">
                <table class="table table-striped table-dark">
                    <tbody>
                      <tr>
                        <th scope="row">E-mail</th>
                        <td>{{ $user_data->email }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Role</th>
                        <td>{{ $user_data->role }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Active</th>
                        <td>{{ $user_data->isActive == 1 ? 'Yes' : 'No' }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <button id="editUser" class="btn btn-block btn-primary">Edit user</button>
               </div>
           </div>
           
       </div>
            
</div>
</div>

    {{-- end Container --}}


{{-- MODELS --}}

<div id="userModal" class="modal-cont">

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card mt-5 bg-dark text-white">
                <div class="card-header">
                    Edit User : {{ $user_data->name }}
                    <button type="button" id="closeUserModal" class="close float-right text-white" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="card-body">
                <form action="{{ route('admin.user.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $user_data->id }}">
                        <div class="form-group">
                            <label for="name">Users Name:</label>
                        <input type="text" name="name" class="form-control" value="{{$user_data->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Users Email:</label>
                        <input type="text" name="email" class="form-control" value="{{$user_data->email}}">
                        </div>
                        <div class="form-group">
                            <label for="role">Users Role:</label>
                            <select name="role" class="form-control">
                                <option value="user" {{ $user_data->role == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user_data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="isActive">Users Active:</label>
                            <select name="isActive" class="form-control">
                                <option value="1" {{ $user_data->isActive == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $user_data->isActive == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-success" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- END MODELS --}}

@endsection

@push('admin.layouts.scripts.scripts')
<script src="{{ asset('js/admin/user.js') }}"></script>
@endpush
@push('admin.layouts.styles')
<link rel="stylesheet" href="{{ asset('css/admin/user.css') }}">
@endpush