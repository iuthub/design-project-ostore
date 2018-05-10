@extends('layouts.login')

@section('content')







    <section id="middlePage" class="bg-white my-5">
        <div class="secLogin container d-flex align-items-center">


            <!-- https://www.codeply.com/go/nhbdi2FkJm/bootstrap-4-login-form -->
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <!--        <h2 class="text-center text-dark mb-4">Login Form</h2> -->
                        <div class="row">
                            <div class="col-md-6 mx-auto">

                                <!-- form card login -->
                                <div class="card rounded-0">
                                    <div class="card-header border-bottom-0 d-flex justify-content-center">
                                        <h2 class="mb-0 font-weight-bold">Login</h2>
                                    </div>
                                    <div class="card-header border-top-0 d-flex justify-content-center">
                                        <p class="mb-0 text-uppercase">Please Log In to use this website</p>
                                    </div>
                                    <div class="card-body">
                                        <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg rounded-0" name="email" id="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg rounded-0" id="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div>

                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-warning btn-lg float-right rounded-0" id="btnLogin">Login</button>
                                        </form>
                                    </div>
                                    <!--/card-block-->
                                </div>
                                <!-- /form card login -->

                            </div>


                        </div>
                        <!--/row-->

                    </div>
                    <!--/col-->
                </div>
                <!--/row-->
            </div>
            <!--/container-->

        </div>
    </section>

@endsection
