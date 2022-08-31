@extends('layouts.app')

@section('main')

<div class="container">
  <h2>Register form</h2>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
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

    <div class="form-group">
      <label for="password">Password Confirmation:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password_confirmation">
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

@endsection
