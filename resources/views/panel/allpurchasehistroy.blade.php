@extends('layouts.panel')
@section('title')
Purchase Histroy
@stop
@section('content')

<div class="row">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">From</th>
                <th scope="col">TO</th>
                <th scope="col">Train Name</th>
                <th scope="col">Ticket class</th>
                <th scope="col">Ticket Fare</th>
                <th scope="col">Purchased By</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
            <tr>
                <th scope="row">{{$purchase->id}}</th>
                <td>{{$purchase->date}}</td>
                <td>{{$purchase->ticket->train->route->from}}</td>
                <td>{{$purchase->ticket->train->route->to}}</td>
                <td>{{$purchase->ticket->train->name}}</td>
                <td>{{$purchase->ticket->class}}</td>
                <td>{{$purchase->ticket->fare}}</td>
                <td>{{$purchase->user->name}}</td>
                <td>{{$purchase->user->phone}}</td>
                
            </tr>
            @endforeach
        </tbody>
        <tfoot>
        <td colspan=6>Total Income</td>
        <td colspan="">{{$purchases->sum('ticket.fare')}}</td>
        <td colspan=2></td>
        </tfoot>
    </table>
</div>
@stop