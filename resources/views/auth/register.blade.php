@extends('layouts.auth')

@section('title')
    Register
@endsection

@section('content')
    <h3 class="form-title font-green">Register</h3>
    <form class="login-form"  method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9" for="name">Name</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Name"
            name="name" value="{{ old('name') }}" required/>
            @if ($errors->has('email'))
                <span class="help-block" style="color: red;">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9" for="email">Email Address</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email Address"
            name="email" value="{{ old('email') }}" required/>
             @if ($errors->has('email'))
                <span class="help-block" style="color: red;">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9" for="password">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password"
            name="password" required/>
             @if ($errors->has('password'))
                <span class="help-block" style="color: red;">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9" for="name">Confirm Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirm Password"
            name="password_confirmation" required/>
        </div>

        

        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Register</button>
            <br><br>
            <a class="acount-btn" href="/login" style="color: #002bff;">* Alreay User? Login to Continue</a> 
        </div>
    </form>
@endsection
