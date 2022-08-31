@extends('layouts.app')

@section('main')

<div class="container">
  <h2>Forgot Password form</h2>
  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-dark">Send Link</button>
  </form>
</div>

@endsection
