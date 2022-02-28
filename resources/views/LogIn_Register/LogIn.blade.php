@extends('Layout.Template3')

@section('containerPertama')
  <h1 class="display-4" style="text-align: center">Log In</h1>
  <br>

  <div class="text-center">
    <div class="container">
    <main class="form-signin">
      <form>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <br>
        <button class="w-100 btn btn-lg" style="background-color: rgba(0, 149, 199, 0.575); color: white;" type="submit">Sign in</button>
      </form>
      <p style="margin-top: 3px;">Click here to <a href="/register">Register</a></p>
    </main>
    </div>
  </div>
@endsection

