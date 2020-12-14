@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, quis fugit voluptas, quaerat nobis impedit ullam inventore ut necessitatibus atque, labore unde dicta libero. At doloremque facere dolorum voluptatem sequi!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar.</p>
@endsection
