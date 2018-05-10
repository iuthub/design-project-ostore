@extends('layouts.app')


@section('content')


    <section id="middlePage" class="bg-white my-5">

        <div class="container d-flex align-items-center">
            <form class="container" method="POST" action="{{ url('updateaccount')}}">

                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1>Edit account</h1>
                        <h3>Please enter your details below</h3>
                    </div>
                    <div class="col-12 col-lg-6 align-self-center">
                        <a href="{{url('logout')}}" class="text-primary" ><h2 class="">Log Out</h2></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName">First Name*</label>
                            <input type="text" name="firstName" class="form-control rounded-0" id="firstName" value="{{ old('firstName') }}" required autofocus>
                            @if ($errors->has('firstName'))
                                <span class="help-block">
                            <strong>{{ $errors->first('firstName') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group{{ $errors->has('secondName') ? ' has-error' : '' }}">
                            <label for="secondName">Second Name*</label>
                            <input type="text" name="secondName" class="form-control rounded-0" id="secondName" value="{{ old('secondName') }}" required autofocus>
                            @if ($errors->has('secondName'))
                                <span class="help-block">
                            <strong>{{ $errors->first('secondName') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group{{ $errors->has('companyName') ? ' has-error' : '' }} col">
                        <label for="companyName">Company Name</label>
                        <input type="text" name="companyName" class="form-control rounded-0" id="companyName" value="{{ old('companyName') }}">
                        @if ($errors->has('companyName'))
                            <span class="help-block">
                            <strong>{{ $errors->first('companyName') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} col">
                        <label for="address">Address*</label>
                        <input type="text" name="address" class="form-control rounded-0" id="address" value="{{ old('address') }}" required>
                        @if ($errors->has('address'))
                            <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group{{ $errors->has('statecountry') ? ' has-error' : '' }}">
                            <label for="statecountry">State/Country*</label>
                            <input type="text" name="statecountry" class="form-control rounded-0" id="statecountry" value="{{ old('statecountry') }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                            <strong>{{ $errors->first('statecountry') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group{{ $errors->has('postzipcode') ? ' has-error' : '' }}">
                            <label for="postzipcode">Postcode/Zip*</label>
                            <input type="text" name="postzipcode" class="form-control rounded-0" id="postzipcode" value="{{ old('postzipcode') }}" required>
                            @if ($errors->has('postzipcode'))
                                <span class="help-block">
                            <strong>{{ $errors->first('postzipcode') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email Address*</label>
                            <input type="email" name="email" class="form-control rounded-0" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                            @endif
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">Phone*</label>

                            <input type="text" name="phone" class="form-control rounded-0" id="phone" value="{{ old('phone') }}" required>
                            @if ($errors->has('phone'))
                                <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col">
                        <label for="password">Password</label>
                        <input type="password" name="password" type="password" class="form-control rounded-0" id="password" required>

                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </small>
                        @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary rounded-0 text-uppercase px-4 py-2">Update<i class="fas fa-chevron-circle-right ml-2"></i></button>
                    </div>
                </div>


                <!--
                      <h1 class="text sss-text-gray">404</h1>
                      <h3>Oops, This Page Could Not Be Found!</h3>


                      <div class="list-group">
                        <a href="index.php"><button type"button" class="btn btn-dark sss-black rounded-0 text-uppercase px-4">Home Page</button></a>
                        <a href="#" class="list-group-item list-group-item-action px-0 border-0">Favourite Desings</a>
                        <a href="#" class="list-group-item list-group-item-action px-0 border-0">Orders</a>
                        <a href="#" class="list-group-item list-group-item-action px-0 border-0">Shipments</a>
                        <a href="#" class="list-group-item list-group-item-action px-0 border-0 rounded-0">Log Out</a>
                      </div> -->

            </form>

     </div>
    </section>


@endsection








