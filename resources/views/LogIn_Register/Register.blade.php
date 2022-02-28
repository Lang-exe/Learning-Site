@extends('Layout.Template3')

@section('containerPertama')
  <h1 class="display-4" style="text-align: center">Register</h1>
  <br>

  <div class="text-center">
    <div class="container">
    <main class="form-registation">
      <form action="/register"  method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="email" class="form-control @error('email')is-invalid @enderror" id="email" required value="{{ old('email') }}">
          <label for="email">Username</label>
        @error('email')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" required>
          <label for="password">Password</label>
        @error('password')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password2" class="form-control @error('password2')is-invalid @enderror" id="password2" required>
          <label for="password2">Confirm Password</label>
        @error('password2')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <br>
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" required value="{{ old('name') }}">
          <label for="name">Full Name</label>
        @error('name')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="address" class="form-control @error('address')is-invalid @enderror" id="address" required required value="{{ old('address') }}">
          <label for="address">Address</label>
        @error('address')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="tel" name="phone" class="form-control @error('phone number')is-invalid @enderror" id="phone" required required value="{{ old('phone') }}">
          <label for="phone">Phone Number</label>
        @error('phone')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="number" name="age" class="form-control @error('age')is-invalid @enderror" id="age" required required value="{{ old('age') }}">
          <label for="age">Age</label>
        @error('age')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-floating">
          <input type="date" name="birth" class="form-control @error('birth')is-invalid @enderror" id="birth" required required value="{{ old('birth') }}">
          <label for="birth">Birth Date</label>
        @error('birth')
            <div class="invalid-feedback" style="text-align: left; margin-left: 5px;">
              {{ $message }}
            </div>
        @enderror
        </div>
        <br>
        <button class="w-100 btn btn-lg" style="background-color: rgba(0, 149, 199, 0.575); color: white;" type="submit">Register</button>
      </form>
      <p style="margin-top: 3px;">Click here to <a href="/login">Log In</a></p>
    </main>
    </div>
  </div>
@endsection

