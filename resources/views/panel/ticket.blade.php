@extends('layouts.panel')
@section('title')
Ticket List
@stop
@section('content')
<div class="row" style="
    border-width: 1em;
    padding: 1em;
">
<div class="col-12">
<a type="button" href="{{route('ticket.create')}}" class="btn btn-primary">Add Ticket</a>
</div>
</div>
<div class="row">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Train Name</th>
                <th scope="col">Time</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Ticket Class</th>
                <th scope="col">Seat</th>
                <th scope="col">Fare</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <th scope="row">{{$ticket->id}}</th>
                
                <th>{{$ticket->train->name}}</th>
                <th>{{$ticket->time}}</th>
                <th>{{$ticket->train->route->from}}</th>
                <th>{{$ticket->train->route->to}}</th>
                <th>{{$ticket->class}}</th>
                <th>{{$ticket->seats}}</th>
                <td>{{$ticket->fare}}</td>
                <td><a href="{{ route('ticket.edit', ['id' => $ticket->id]) }}" >Edit<a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@stop