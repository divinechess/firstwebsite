
@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium commodi fugiat laborum laudantium molestiae quaerat quos repellendus sapiente tempora velit. Ab aliquam aperiam hic itaque magni perspiciatis, quas quia rerum?
    </p>
@endsection

@section('sidebar')
    @parent
<p>This is the appended content</p>
@endsection
