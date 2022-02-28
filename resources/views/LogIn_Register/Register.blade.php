@extends('Layout.Template3')

@section('containerPertama')
  <h1 class="display-4" style="text-align: center">Register</h1>
  <br>

  <div class="text-center">
    <div class="container">
    <main class="form-signin">
      <form>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput">
          <label for="floatingInput">Fullname</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingPassword">
          <label for="floatingPassword">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingInput">
          <label for="floatingInput">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword">
          <label for="floatingPassword">Confirm Password</label>
          <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput">
          <label for="floatingInput">Address</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput">
          <label for="floatingInput">Phone Number</label>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control" id="floatingPassword">
          <label for="floatingPassword">Age</label>
        </div>
        <div class="form-floating">
          <input type="date" class="form-control" id="floatingPassword">
          <label for="floatingPassword">Birth Date</label>
        </div>
        </div>
        <br>
        <button class="w-100 btn btn-lg" style="background-color: rgba(0, 149, 199, 0.575); color: white;" type="submit">Register</button>
      </form>
      <p style="margin-top: 3px;">Click here to <a href="/login">Log In</a>.</p>
    </main>
    </div>
  </div>
@endsection

