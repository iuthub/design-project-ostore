@extends('layouts.user');

@section('content')




    <section id="middlePage" class="bg-white my-5">

        <div class="container d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-8"><!-- YOUR BASKET LEFT-->
                        <div class="row text-uppercase">
                            <h1>Your Basket</h1>
                            <h3>64 item</h3>
                        </div>



                        @if(isset($minkblankets))
@foreach($minkblankets as $minkblanket)


                        <div class="row py-4 border-bottom mr-4"> <!-- PRODUCT 1-->
                            @foreach($minkblanket as $photos)
                                @foreach($photos->photos as $photo)
                            <div class="col-4"><!-- Product image LEFT-->
                                <img src="{{ asset('storage/minkblanket/'.$photo->path) }}" alt="{{$photo->path}}" class="img-fluid">
                            </div>
                                    @endforeach
                            @endforeach
                            <div class="col-8"><!-- Details RIGHT-->
                                <div class="row">
                                    <div class="col-lg-8"><!-- Info left-->
                                        @foreach($minkblanket as $mink)
                                        <h5 class="text-uppercase font-weight-bold" id="itemname">{{$mink->title}}</h5>
                                        @endforeach
                                        <h6 id="itemcolor">Color: White</h6>
                                        <h6 id="iteminstock" class="text-success">In Stock</h6>
                                        <h6 id="itemnote">Note: Requesting other color combinations</h6>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"><!-- Amount right-->
                                        <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="dwn"><i class="fas fa-minus"></i></button>
                    </span>
                                            <input type="text" class="form-control text-center" value="1">
                                            <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="up"><i class="fas fa-plus"></i></button>
                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row itemcontrol"><!-- Control -->
                                    <div class="pr-2"><a href="#" class="">Edit</a></div>
                                    {!! Form::open(['method'=>'POST', 'action'=>'BasketController@delete' ]) !!}
                                    <div class="form-group">
                                        @foreach($minkblanket as $mink)
                                            @foreach($mink->basket as $basket)
                                        {!! Form::hidden('id',$basket->id,['class'=>'form-control']) !!}
                                        @endforeach
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                    {!! Form::submit('delete',['class'=>'btn btn-danger pr-2']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>



@endforeach
@endif
                        @if(isset($prayermats))
                            @foreach($prayermats as $prayermat)


                                <div class="row py-4 border-bottom mr-4"> <!-- PRODUCT 1-->
                                    @foreach($prayermat as $photos)
                                        @foreach($photos->photos as $photo)
                                            <div class="col-4"><!-- Product image LEFT-->
                                                <img src="{{ asset('storage/prayermat/'.$photo->path) }}" alt="{{$photo->path}}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    @endforeach
                                    <div class="col-8"><!-- Details RIGHT-->
                                        <div class="row">
                                            <div class="col-lg-8"><!-- Info left-->
                                                @foreach($prayermat as $mink)
                                                    <h5 class="text-uppercase font-weight-bold" id="itemname">{{$mink->title}}</h5>
                                                @endforeach
                                                <h6 id="itemcolor">Color: White</h6>
                                                <h6 id="iteminstock" class="text-success">In Stock</h6>
                                                <h6 id="itemnote">Note: Requesting other color combinations</h6>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"><!-- Amount right-->
                                                <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="dwn"><i class="fas fa-minus"></i></button>
                    </span>
                                                    <input type="text" class="form-control text-center" value="1">
                                                    <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="up"><i class="fas fa-plus"></i></button>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row itemcontrol"><!-- Control -->
                                            <div class="pr-2"><a href="#" class="">Edit</a></div>
                                            {!! Form::open(['method'=>'POST', 'action'=>'BasketController@delete' ]) !!}
                                            <div class="form-group">
                                                @foreach($prayermat as $mink)
                                                    @foreach($mink->basket as $basket)
                                                        {!! Form::hidden('id',$basket->id,['class'=>'form-control']) !!}
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <div class="form-group">
                                                {!! Form::submit('delete',['class'=>'btn btn-danger pr-2']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>



                            @endforeach
                        @endif
                        @if(isset($carpets))
                            @foreach($carpets as $carpet)


                                <div class="row py-4 border-bottom mr-4"> <!-- PRODUCT 1-->
                                    @foreach($carpet as $photos)
                                        @foreach($photos->photos as $photo)
                                            <div class="col-4"><!-- Product image LEFT-->
                                                <img src="{{ asset('storage/carpet/'.$photo->path) }}" alt="{{$photo->path}}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    @endforeach
                                    <div class="col-8"><!-- Details RIGHT-->
                                        <div class="row">
                                            <div class="col-lg-8"><!-- Info left-->
                                                @foreach($carpet as $mink)
                                                    <h5 class="text-uppercase font-weight-bold" id="itemname">{{$mink->title}}</h5>
                                                @endforeach
                                                <h6 id="itemcolor">Color: White</h6>
                                                <h6 id="iteminstock" class="text-success">In Stock</h6>
                                                <h6 id="itemnote">Note: Requesting other color combinations</h6>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"><!-- Amount right-->
                                                <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="dwn"><i class="fas fa-minus"></i></button>
                    </span>
                                                    <input type="text" class="form-control text-center" value="1">
                                                    <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="up"><i class="fas fa-plus"></i></button>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row itemcontrol"><!-- Control -->
                                            <div class="pr-2"><a href="#" class="">Edit</a></div>
                                            {!! Form::open(['method'=>'POST', 'action'=>'BasketController@delete' ]) !!}
                                            <div class="form-group">
                                                @foreach($carpet as $mink)
                                                    @foreach($mink->basket as $basket)
                                                        {!! Form::hidden('id',$basket->id,['class'=>'form-control']) !!}
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <div class="form-group">
                                                {!! Form::submit('delete',['class'=>'btn btn-danger pr-2']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>



                            @endforeach
                        @endif
                        @if(isset($flannels))
                            @foreach($flannels as $flannel)


                                <div class="row py-4 border-bottom mr-4"> <!-- PRODUCT 1-->
                                    @foreach($flannel as $photos)
                                        @foreach($photos->photos as $photo)
                                            <div class="col-4"><!-- Product image LEFT-->
                                                <img src="{{ asset('storage/flannel/'.$photo->path) }}" alt="{{$photo->path}}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    @endforeach
                                    <div class="col-8"><!-- Details RIGHT-->
                                        <div class="row">
                                            <div class="col-lg-8"><!-- Info left-->
                                                @foreach($flannel as $mink)
                                                    <h5 class="text-uppercase font-weight-bold" id="itemname">{{$mink->title}}</h5>
                                                @endforeach
                                                <h6 id="itemcolor">Color: White</h6>
                                                <h6 id="iteminstock" class="text-success">In Stock</h6>
                                                <h6 id="itemnote">Note: Requesting other color combinations</h6>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"><!-- Amount right-->
                                                <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="dwn"><i class="fas fa-minus"></i></button>
                    </span>
                                                    <input type="text" class="form-control text-center" value="1">
                                                    <span class="input-group-btn">
                      <button class="btn btn-default rounded-0" data-dir="up"><i class="fas fa-plus"></i></button>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row itemcontrol"><!-- Control -->
                                            <div class="pr-2"><a href="#" class="">Edit</a></div>
                                            {!! Form::open(['method'=>'POST', 'action'=>'BasketController@delete' ]) !!}
                                            <div class="form-group">
                                                @foreach($flannel as $mink)
                                                    @foreach($mink->basket as $basket)
                                                        {!! Form::hidden('id',$basket->id,['class'=>'form-control']) !!}
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <div class="form-group">
                                                {!! Form::submit('delete',['class'=>'btn btn-danger pr-2']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>



                            @endforeach
                        @endif



                        <div class="row pt-4 mr-4">
                            <a href="{{url('basket/order')}}" class="w-100"><button type="button" class="btn btn-primary rounded-0 text-uppercase w-100">Proceed</button></a>
                        </div>



                    </div>
                    <div class="col-4 sss-lgray"><!-- PROCEED RIGHT-->
                        <div class="list-group m-4">
                            <a href="{{url('basket/order')}}"><button type="button" class="btn btn-primary rounded-0 text-uppercase mb-3 w-100">Proceed</button></a>
                            <a href="index.php"><button type="button" class="btn btn-dark sss-black rounded-0 text-uppercase w-100">Update Basket</button></a>

                            <h5 class="list-group-item list-group-item-action text-uppercase px-0 border-0 sss-lgray"><strong>Total</strong> 64 Items</h5>
                            <h5 class="list-group-item list-group-item-action p-0 border-0 sss-lgray"><strong>Designs</strong> 4</h5>
                            <h5 class="list-group-item list-group-item-action p-0 border-0 sss-lgray"><strong>Total Items</strong> 64</h5>
                            <a href="#" class="list-group-item list-group-item-action text-uppercase text-center px-0 border-0 sss-lgray text-primary"><i class="fas fa-chevron-left mr-2"></i>Select More Designs</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>














    @endsection