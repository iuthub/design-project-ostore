@extends('layouts.app')

@section('content')
    <section id="middlePage" class="bg-white my-5">

        <div class="secMinkblankets container d-flex align-items-center">
            <div class="container-fluid">
                {!! Form::open(['method'=>'POST', 'action'=>'FlannelController@store', 'files'=>true ]) !!}
                <div class="form-group">
                    {!! Form::label('title','Card title:') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('path','File:') !!}
                    {!! Form::file('path',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Flannel',['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </section>
@endsection