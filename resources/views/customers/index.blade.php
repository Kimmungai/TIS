@extends('layout')

@section('content')
  <h1>All customers</h1>
  @foreach($customers as $customer)
  <div>
    {{$customer->first_name}}
  </div>
  @endforeach
@stop
