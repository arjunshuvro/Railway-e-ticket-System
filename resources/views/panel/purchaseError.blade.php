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
<a type="button" href="{{route('purchase.create')}}" class="btn btn-primary">Try Again</a>
</div>
</div>
<div class="row">
<p class="h1 text-danger">{{$message ?? ''}}</p>
</div>

@stop