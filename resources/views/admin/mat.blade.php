@extends('layouts.admin')

@section('content')



    <section id="middlePage" class="bg-white my-5">

        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-3 sss-lgray d-flex align-items-center">
                <div class="container d-flex align-items-center">
                    <div class="container-fluid">
                        <!-- <h1 class="text-uppercase sss-text-black">Arkyn</h1> -->
                        <h3 class="text-uppercase">Admin Dashboard</h3>
                        <div class="list-group">
                            <a href="index.php"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Show Users<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                            <a href="{{url('admin/edit')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Edit Users<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                            <a href="{{url('admin/minkblanket')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Minkblankets<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                            <a href="{{url('admin/prayermat')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Prayermats<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                            <a href="{{url('admin/flannel')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Flannels<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                            <a href="{{url('admin/carpet')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Carpets<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                            <!--                 <a href="index.php"><button type"button" class="btn btn-warning rounded-0 text-uppercase px-4">Edit Account<i class="fas fa-chevron-circle-right ml-2"></i></button></a> -->
                            <a href="{{url('logout')}}" class="list-group-item list-group-item-action sss-lgray sss-text-black font-weight-bold px-0 border-0 rounded-0">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-8 col-xl-9">
                <div class="container d-flex align-items-center">
                    {{--//<form class="container">--}}
                    {!! Form::open(['method'=>'POST', 'action'=>'PrayerMatController@store', 'files'=>true ,'class'=>'container']) !!}
                    <h1>Upload</h1>
                    <h3>Please enter product details below</h3>

                    <!-- <div class="row">
                      <div class="col-12 col-lg-6">
                        <div class="form-group">
                          <label for="firstName">Title*</label>
                          <input type="text" class="form-control rounded-0" id="firstName">
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="form-group">
                          <label for="secondName">Second Name*</label>
                          <input type="text" class="form-control rounded-0" id="secondName">
                        </div>
                      </div>
                    </div> -->
                    <!--           <div class="row">
                                  <div class="form-group col">
                                    <label for="companyName">Title</label>
                                    <input type="text" class="form-control rounded-0" id="productTitle">
                                  </div>
                              </div> -->
                    <!--           <div class="row">
                                  <div class="form-group col">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control rounded-0" id="address">
                                  </div>
                              </div> -->
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('category','Category:') !!}
                                {!! Form::text('category','Prayermat',['class'=>'form-control text-uppercase rounded-0','disabled'=>true,'id'=>'productCode']) !!}
                                {{--// <label for="productCode">Category</label>
                                 //<input type="text" id="productCode" class="form-control text-uppercase rounded-0" value="Carpet" disabled="true">--}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('title','Title*:') !!}
                                {!! Form::text('title',null,['class'=>'form-control rounded-0']) !!}
                                {{--<label for="productTitle">Title*</label>
                                <input type="text" class="form-control rounded-0" id="productTitle">--}}
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 sss-gray sss-text-white">
                            <div class="form-group">
                                {!! Form::label('path','Image') !!}
                                {!! Form::file('path',null,['class'=>'form-control-file rounded-0','id'=>'productImage']) !!}
                                {{--<label for="productImage">Image</label>
                                <input type="file" class="form-control-file rounded-0" id="productImage">--}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('productQuantity','Quantity*') !!}
                                {!! Form::text('number',null,['class'=>'form-control rounded-0','min'=>'1']) !!}
                                {{--<label for="productQuantity">Quantity*</label>
                                <input type="number" class="form-control rounded-0" id="productQuantity" min="1">--}}
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('prodectCode','Generated Code') !!}
                                {!! Form::text('prc',null,['class'=>'form-control rounded-0','placeholder'=>'#GEBERATED CODE','disabled'=>true]) !!}
                                {{--<label for="productCode">Generated Code</label>
                                <input type="text" id="productCode" class="form-control rounded-0" placeholder="#GENERATED CODE" disabled="true">--}}
                            </div>
                        </div>
                    </div>
                    <!--           <div class="row">
                                <div class="col-12 col-lg-6">
                                  <div class="form-group">
                                    <label for="email">Email Address*</label>
                                    <input type="email" class="form-control rounded-0" id="email" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                  <div class="form-group">
                                      <label for="productImage">Image</label>
                                      <input type="file" class="form-control-file" id="productImage">
                                  </div>
                                </div>
                              </div> -->
                    <!--           <div class="row">
                                <div class="form-group col">
                                  <label for="passwordUser">New Password</label>
                                  <input type="password" class="form-control rounded-0" id="passwordUser">
                                  <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                  </small>
                                </div>
                              </div> -->
                    <div class="row">
                        <div class="form-group col">
                            {!! Form::label('notes','Notes') !!}
                            {!! Form::textarea('prc',null,['class'=>'form-control rounded-0','rows'=>'5','placeholder'=>'Notes about your product, e.g special notes.']) !!}
                            {{--     <label for="notes">Notes</label>
                                 <textarea class="form-control rounded-0" id="productNotes" rows="5" placeholder="Notes about your product, e.g special notes."></textarea>--}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            {{--{!! Form::submit('Create Carpet',['class'=>'btn btn-primary rounded-0 text-uppercase px-4 py-2 ']) !!}--}}
                            <button type="submit" class="btn btn-primary rounded-0 text-uppercase px-4 py-2">Create Prayermat<i class="fas fa-chevron-circle-right ml-2"></i></button>
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
                    {{--</form>--}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>


    </section>




@endsection('content')