@extends('layouts.panel')
@section('title')
Purchase Ticket
@stop
@section('content')
<p class="h1 text-success">Purchase Ticket</p>
<div class="row">
    <form method="post" action="{{ route('purchase.store' )}}">
        @csrf
        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="route_id" id="route_id">
                <option selected>Select Route</option>
                @foreach($routes as $route)
                <option value="{{$route->id}}">{{$route->from}} To {{$route->to}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="train_id" id="train_id">
                <option selected>Select Train</option>
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="ticket_id" id="ticket_id">
                <option selected>Select ticket</option>
            </select>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop