@extends('layouts.panel')
@section('title')
Train List
@stop
@section('content')
<div class="row" style="
    border-width: 1em;
    padding: 1em;
">
<div class="col-12">
<a type="button" href="{{route('train.create')}}" class="btn btn-primary">Add Train</a>
</div>
</div>
<div class="row">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Train Name</th>
                <th scope="col">Train Indentity</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <th scope="row">{{$train->id}}</th>
                <th scope="row">{{$train->name}}</th>
                <th scope="row">{{$train->indentification_no}}</th>
                <td>{{$train->route->from}}</td>
                <td>{{$train->route->to}}</td>
                <td>{{$train->driver->name}}</td>
                <td><a href="{{ route('train.edit', ['id' => $train->id]) }}" >Edit<a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@stop