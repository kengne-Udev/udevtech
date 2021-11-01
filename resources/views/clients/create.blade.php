@extends('layout')

@section('content')

<div class="container">
    <hr>
    <h2>Create a new client</h2>
    <form action="/clients" method="POST">
        @csrf
        @include('includes.form')
        <button class="btn btn-primary">Add client</button>
    </form>
</div>

@endsection
