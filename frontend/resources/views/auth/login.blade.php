@extends('layouts.auth')
@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-danger" style="background-color:#87CEEB ;">
            <div class="card-header text-center">
            <img src="dist/img/logo.png" alt="logo" width="80px">
                <a href="#" class="h1"><b>LOGIN</b> HERE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sudah memiliki akun?</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="/login36" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-danger">Remember Me
									  <input type="checkbox" unchecked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="/register36">Register Disini</a>
								</div>
	            </div>

        <div class="row justify-content-center">
          <div class="col text-center">
          <div class="form group">
        <button type="submit" class="btn btn-danger rounded submit p-2 px-5">Log In</button>
        </div>
          </div>
        </div>
        
        </form>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
