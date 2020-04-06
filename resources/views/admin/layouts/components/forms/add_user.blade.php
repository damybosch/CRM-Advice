<form action="{{ route('admin.user.store') }}" method="post" id="new-user-form" class="pt-3">
    @csrf
    <div class="form-group">
        <label for="name">New User Name:</label>
    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
    @if($errors->has('name'))
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="name">New User Email:</label>
        <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
        @if($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="name">Select New User Role:</label>
        <select name="role" class="form-control" >
            <option value="user" default>User</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <div class="form-group">
        <label for="password">Enter New User Password:</label>
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
        @if($errors->has('password'))
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
        </div>
    @endif
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm New User Password:</label>
        <input type="password" name="confirm_password" class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}">
        @if($errors->has('confirm_password'))
        <div class="invalid-feedback">
            {{ $errors->first('confirm_password') }}
        </div>
    @endif
    </div>
    <div class="form-group">
        <input type="submit" value="Create user" class="form-control btn btn-success">
    </div>


</form>