@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>

    <form action="{{ route('contact-form-submit') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputSubject">Subject</label>
            <input type="text" class="form-control" id="exampleInputSubject" name="subject">
        </div>
        <div class="form-group">
            <label for="exampleInputMessage">Message</label>
            <textarea name="message" id="" rows="3" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('sidebar')
@endsection