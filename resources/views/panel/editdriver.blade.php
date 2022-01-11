@extends('layouts.panel')
@section('title')
Driver Edit
@stop
@section('content')
<p class="h1 text-success">Edit Driver Infomation</p>
<div class="row">
<form method="post" action="{{ route('driver.update', ['id' => $driver->id]) }}">
{{ method_field('PUT') }}
@csrf
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$driver->name}}">
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{$driver->phone}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NID card No</label>
    <input type="nid" class="form-control" id="nid" name="nid" value="{{$driver->nid}}">
  </div>
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop