@extends('layouts.app')

@section('main')

<div class="container">
  <h2>Login form</h2>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    @error('password')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div class="form-group">
        <a href="{{ route('password.request') }}">Forgot Password</a>
    </div>
    <button type="submit" class="btn btn-dark">Login</button>
  </form>
</div>

@endsection
