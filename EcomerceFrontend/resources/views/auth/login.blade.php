@extends('layouts.app')

@section('content')

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Inicio Sesion</h3>

                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder=" " value=" " aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder=" " aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Recuerdame</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary w-100 mt-4 mb-0"> Login </button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <small class="text-muted">Olvidaste tu contraseña? Reiniciala aqui 
                  <a href="/login/forgot-password" class="text-info text-gradient font-weight-bold">click</a>
                </small>
                  <p class="mb-4 text-sm mx-auto">
                    No tienes una cuenta aun?
                    <a href="register" class="text-info text-gradient font-weight-bold">Registrate</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection 