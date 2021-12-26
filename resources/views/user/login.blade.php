@extends('layout/index')

@section('title', 'Rekap Data Login')

@section('container')
<div class="wrapper-login" style="display: flex; height: 100vh; align-items: center; justify-content: center;">
  <div class="card-body" style="padding: 0 25%;">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="/login-post" method="post">
    @csrf
      <div class="input-group mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
@endsection