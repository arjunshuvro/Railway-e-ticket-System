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
<a type="button" href="{{route('purchase.create')}}" class="btn btn-primary">Purchase Ticket</a>
</div>
</div>
<div class="row">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Train Name</th>
                <th scope="col">From</th>
                <th scope="col">TO</th>
                <th scope="col">Ticket Class</th>
                <th scope="col">Fare</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
            <tr>
                <th scope="row">{{$purchase->id}}</th>
                <td>{{$purchase->date}}</td>
                <td>{{$purchase->ticket->train->name}}</td>
                <td>{{$purchase->ticket->train->route->from}}</td>
                <td>{{$purchase->ticket->train->route->to}}</td>
                <td>{{$purchase->ticket->class}}</td>
                <td>{{$purchase->ticket->fare}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@stop