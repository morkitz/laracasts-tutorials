@extends('layout')

@section('content')
   @if (empty($people))
      No people exist.
   @else
      The following people exist:
   @endif
      @foreach ($people as $person)
      <li>{{ $person }}</li>
   @endforeach
@stop
