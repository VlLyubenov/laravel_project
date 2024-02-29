@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Register</h3>
                @if(session()->has('register_message'))
                <p class="alert alert-success">{{ session('register_message') }}</p>
                @endif
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                      @error('name')
                          <p class="alert alert-danger">{{$message}}</p>
                      @enderror
                    </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                        @error('emial')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                        @error('password')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    </div>
                      <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="" aria-describedby="helpId">
                        @error('password_confirmation')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    </div>
                      <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>


            <div class="col">
                <h3>Login</h3>
                @if(session()->has('login_fail'))
                <p class="alert alert-danger">{{ session('login_fail') }}</p>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
