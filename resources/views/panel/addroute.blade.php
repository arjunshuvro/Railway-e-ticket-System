@extends('layouts.panel')
@section('tittle')
Add Route
@stop
@section('content')
<p class="h1 text-success">Add Route Infomation</p>
<div class="row">
<form method="post" action="{{ route('route.store' )}}">
@csrf
  <div class="mb-3">
    <label for="from" class="form-label">From</label>
    <input type="text" class="form-control" id="from" name="from">
  </div>
  <div class="mb-3">
    <label for="to" class="form-label">to</label>
    <input type="text" class="form-control" id="to" name="to">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Toll</label>
    <input type="nid" class="form-control" id="toll" name="toll">
  </div>
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop