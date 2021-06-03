
@extends('layouts.app2')

@section('content')
    <h3>Contact Page</h3>
    {!! Form::open(['url' => 'contact.submit']) !!}
    <div class="form-group">
     {{form::label    ('name','Name')}}
     {{form::text    ('name','',['class'=>'form-control','placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
        {{form::label    ('email','E-mail Address')}}
        {{form::text    ('email','',['class'=>'form-control','placeholder' => 'Enter email'])}}
    </div>
    <div class="form-group">
        {{form::label    ('message','Message')}}
        {{form::textarea    ('message','',['class'=>'form-control','placeholder' => 'Enter message'])}}
    </div>
    <div>
        {{form::submit('Submit',['class'=> 'btn btn-primary'])}}

    </div>
    {!! Form::close() !!}

@endsection

{{--@section('content')--}}
{{--    <h1>Contact</h1>--}}
{{--@endsection--}}
