@extends('layouts.app')


@section('content')

    <section id="middlePage" class="bg-white my-5">

        <div class="secMinkblankets container d-flex align-items-center">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="container border mb-5">
                            <div class="row">
                                <h3 class="text-uppercase m-3">Refine</h3>
                            </div>
                            <div class="row">
                                <div class="pos-f-t container-fluid border-top">
                                    <div class="collapse" id="collectionDropdown">
                                        <div class="bg-light p-4">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">Animal</a>
                                                <a href="#" class="list-group-item list-group-item-action">Flower</a>
                                                <a href="#" class="list-group-item list-group-item-action">Baby</a>
                                                <a href="#" class="list-group-item list-group-item-action">Lacquer</a>
                                                <a href="#" class="list-group-item list-group-item-action">Solid</a>
                                            </div>
                                        </div>
                                    </div>
                                    <nav class="navbar navbar-light bg-white">
                                        <h4 class="navbar-brand text-uppercase align-self-center m-2" href="#">Collection</h4>
                                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#collectionDropdown" aria-controls="collectionDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                    </nav>
                                </div>
                            </div>
                            <div class="row">
                                <div class="pos-f-t container-fluid border-top">
                                    <div class="collapse" id="colourDropdown">
                                        <div class="bg-light p-4">
                                            <!--                     <h4 class="text-dark">Collapsed content</h4>
                                                                <span class="text-muted">Toggleable via the navbar brand.</span> -->
                                            <div class="row">
                                                <!-- <div class="col"><div class="colorBox bg-dark"></div></div>
                                                <div class="col"><div class="colorBox bg-danger"></div></div>
                                                <div class="col"><div class="colorBox bg-warning"></div></div>
                                                <div class="col"><div class="colorBox bg-success"></div></div> -->
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-success"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-danger"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-success"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-danger"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-success"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-danger"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-dark"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-success"></i></div>
                                                <div class="col"><i class="fas fa-square-full text-danger"></i></div>
                                            </div>
                                            <div class="row">

                                            </div>
                                            <div class="row">

                                            </div>
                                            <div class="row">

                                            </div>
                                        </div>
                                    </div>
                                    <nav class="navbar navbar-light bg-white">
                                        <h4 class="navbar-brand align-self-center text-uppercase align-self-center m-2" href="#">Colour</h4>
                                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#colourDropdown" aria-controls="colourDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col">
                                <h5>View: 24 | 48 | 120</h5>
                            </div>
                            <div class="col justify-content-right text-right">
                                <h5 class="d-inline">Page 1 of 4</h5>
                                <a href="" class="mx-2"><i class="far fa-caret-square-left"></i></a>
                                <a href="" class="mx-2"><i class="far fa-caret-square-right"></i></a>
                            </div>
                        </div>

                        <?php $i=0  ?>
                        @foreach($mats as $mat)
                            @if($i%4==0)
                                <div class="row my-4">
                                    @endif
                                    <div class="col">
                                        <div class="card">

                                            @foreach($mat->photos as $photo)
                                            <img class="card-img-top" src="{{ asset('storage/prayermat/'.$photo->path) }}" alt="{{$photo->path}}">

                                            @endforeach
                                                <div class="card-body">
                                                <h4 class="card-title">{{$mat->title}}</h4>
                                                <!--               <p class="card-text">Some example text.</p>
                                                              <a href="#" class="btn btn-primary">See Profile</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    @if($i%4==0)
                                </div>
                            @endif
                            <button class="btn btn-info">Order</button>
                            <?php $i++  ?>
                            @endforeach







                            <div class="row">
                                <div class="col">
                                    <h5>View: 24 | 48 | 120</h5>
                                </div>
                                <div class="col justify-content-right text-right">
                                    <h5 class="d-inline">Page 1 of 4</h5>
                                    <a href="" class="mx-2"><i class="far fa-caret-square-left"></i></a>
                                    <a href="" class="mx-2"><i class="far fa-caret-square-right"></i></a>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>

    </section>












@endsection

