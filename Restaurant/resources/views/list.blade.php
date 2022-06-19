@extends('layout')

@section('content')
<h1>Restaurant List Page</h1>
<div class="col-sm-8">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

{{-- {{print_r($data)}} --}}

{{-- <p>{{$item->name}}</p>  --}}

@endsection