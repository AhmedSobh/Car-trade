@extends('layouts.app')

@section('title','All Tickets')

@section('content')
  <div class="container top top20">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">All Tickets</h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" >
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Customer Address</th>
                <th>Message</th>
                <th>Created At</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr class="clickable-row" >
                      <th scope="row">{{ $ticket->id }}</th>
                      <td>{{ $ticket->user->name }}</td>
                      <td>{{ $ticket->user->phone}}</td>
                      <td>{{ $ticket->user->address}}</td>
                      <td>{{ $ticket->message}}</td>
                      <td>{{ $ticket->created_at  }}</td>
                    </tr>
                @endforeach
            </tbody>
            <div class="text-center">
              {{$tickets->links()}}
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
