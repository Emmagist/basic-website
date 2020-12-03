@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam suscipit iure ea placeat, maxime, iusto mollitia autem ut accusantium tempore odit repudiandae recusandae? In perferendis corrupti at ad blanditiis nostrum.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar.</p>
@endsection