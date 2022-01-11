@extends('layouts.panel')
@section('title')
Panel
@stop
@section('content')
@admin
<div class="row" style="
    padding-bottom: 2em;
">
    <div class="col-4">
        <a href="{{route('route.create')}}" type="button" class="btn btn-success btn-lg">Add Route info</a>
    </div>
    <div class="col-4">
        <a href="{{route('train.create')}}" type="button" class="btn btn-info btn-lg">Add Train Info</a>
    </div>
    <div class="col-4">
        <a href="{{route('driver.create')}}" type="button" class="btn btn-success btn-lg">Add Driver info</a>
    </div>
</div>

<div class="row" style="
    padding-bottom: 2em;
">
    <div class="col-6">
        <a href="{{route('ticket.create')}}" type="button" class="btn btn-danger btn-lg">Add Ticket Info</a>
    </div>
    <div class="col-6">
        <a href="{{route('ticket.index')}}" type="button" class="btn btn-danger btn-lg">View Ticket Info</a>
    </div>
    
</div>

<div class="row" style="
    padding-bottom: 2em;
">
    <div class="col-4">
        <a href="{{route('route.index')}}" type="button" class="btn btn-success btn-lg">View Route info</a>
    </div>
    <div class="col-4">
        <a href="{{route('train.index')}}" type="button" class="btn btn-info btn-lg">View Train Info</a>
    </div>
    <div class="col-4">
        <a href="{{route('driver.index')}}" type="button" class="btn btn-success btn-lg">View Driver info</a>
    </div>
</div>
<div class="row" style="
    padding-bottom: 2em;
">
<div class="col-12">
        <a href="{{route('purchase.history')}}" type="button" class="btn btn-danger btn-lg">All Purchase History</a>
    </div>
</div>
@endadmin
@user
<div class="row" style="
    padding-bottom: 2em;
">
    <div class="col-6">
        <a href="{{route('purchase.index')}}" type="button" class="btn btn-info btn-lg">My Previous Purchased ticket</a>
    </div>
    <div class="col-6">
        <a href="{{route('purchase.create')}}" type="button" class="btn btn-success btn-lg">Purchase ticket</a>
    </div>
</div>
@enduser
@stop