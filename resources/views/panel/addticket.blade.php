@extends('layouts.panel')
@section('title')
Ticket Add
@stop
@section('content')
<p class="h1 text-success">Add Ticket Infomation</p>
<div class="row">
  <form method="post" action="{{ route('ticket.store' )}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Train Name</label>
      <select class="form-select" aria-label="Default select example" name="train_id">
        <option selected>Open this select menu</option>
        @foreach($trains as $train)
        <option value="{{$train->id}}">{{$train->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="time" class="form-label">Time</label>
      <input type="text" class="form-control" id="time" name="time">
    </div>
    <div class="mb-3">
      <label for="class" class="form-label">Class</label>
      <input type="text" class="form-control" id="class" name="class">
    </div>
    <div class="mb-3">
            <label for="seats" class="form-label">Seats</label>
            <input type="text" class="form-control" id="seats" name="seats">
    </div>
    <div class="mb-3">
      <label for="fare" class="form-label">Fare</label>
      <input type="text" class="form-control" id="fare" name="fare">
    </div>
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@stop