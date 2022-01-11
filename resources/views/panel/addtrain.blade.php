@extends('layouts.panel')
@section('title')
Train Add
@stop
@section('content')
<p class="h1 text-success">Add Train Infomation</p>
<div class="row">
    <form method="post" action="{{ route('train.store' )}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name">
            <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="identification_no" class="form-label">Train Identity</label>
            <input type="text" class="form-control" id="identification_no" name="indentification_no">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Route</label>
            <select class="form-select" aria-label="Default select example" name="route_id">
                <option selected>Open this select menu</option>
                @foreach($routes as $route)
                    <option value="{{$route->id}}">{{$route->from}} to {{$route->to}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Driver</label>
            <select class="form-select" aria-label="Default select example" name="driver_id">
                <option selected>Open this select menu</option>
                @foreach($drivers as $driver)
                    <option value="{{$driver->id}}">{{$driver->name}}</option>
                @endforeach
            </select>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop