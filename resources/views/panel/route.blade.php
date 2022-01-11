@extends('layouts.panel')
@section('title')
Driver List
@stop
@section('content')
<div class="row" style="
    border-width: 1em;
    padding: 1em;
">
<div class="col-12">
<a type="button" href="{{route('route.create')}}" class="btn btn-primary">Add Route</a>
</div>
</div>
<div class="row">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Toll</th>
                <th scope="col" colspan="2">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($routes as $route)
            <tr>
                <th scope="row">{{$route->id}}</th>
                <td>{{$route->from}}</td>
                <td>{{$route->to}}</td>
                <td>{{$route->toll}} TK</td>
                <td><a href="{{ route('route.edit', ['id' => $route->id]) }}" >Edit<a></td>
                <td><a href="{{ route('route.show', ['id' => $route->id]) }}" >Show<a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@stop