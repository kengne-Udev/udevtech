@extends('layout')
@section('content')

<div class="container">
    <hr>
    <h2>OUR CLIENTS</h2>
<a href="/clients/create" class="btn btn-primary">Add new client</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Names</th>
        <th scope="col">Status</th>
        <th scope="col">Enterprise</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
      <tr>
        <th scope="row">{{$client->id}}</th>
        <td><a href="/clients/{{$client->id}}">{{$client->name}}</a></td>
        <td>{{$client->status}}</td>
        <td>{{$client->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
