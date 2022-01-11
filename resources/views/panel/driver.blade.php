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
<a type="button" href="{{route('driver.create')}}" class="btn btn-primary">Add Driver</a>
</div>
</div>
<div class="row">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">NID</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($drivers as $driver)
            <tr>
                <th scope="row">{{$driver->id}}</th>
                <td>{{$driver->name}}</td>
                <td>{{$driver->phone}}</td>
                <td>{{$driver->nid}}</td>
                <td><a href="{{ route('driver.edit', ['id' => $driver->id]) }}" >Edit<a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@stop