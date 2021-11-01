@extends('layout')

@section('content')

<div class="container">
    <hr>
    <h2>Edit {{$client->name}} profil</h2>
    <form action="/clients/{{$client->id}}" method="POST">
        @method('PATCH')
        @csrf
        @include('includes.form')
        <button class="btn btn-primary">Save client Information</button>
    </form>
</div>

@endsection
