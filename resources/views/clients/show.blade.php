@extends('layout')

@section('content')
    <div class="container">
        <hr>
        <h2>{{$client->name}}</h2>
        <a href="/clients/{{$client->id}}/edit" class="btn btn-primary py-3">Edit client</a>
        <form action="/clients/{{$client->id}}" method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete client</button>
        </form>
        <hr>
        <p><strong>Email :</strong>{{$client->email}}</p>
        <p><strong>Status :</strong>{{$client->status}}</p>
    </div>
@endsection
