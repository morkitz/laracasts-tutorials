@extends('layout')


@section('content')
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         <h1>{{ $card->title }}</h1>
         <!-- Basic Bootstrap List Group -->
         <ul class="list-group">
            @foreach ($card->notes as $note)
               <li class="list-group-item">{{ $note->body }}</li>
            @endforeach
         </ul>
         <hr>
         <form method="post" action="/cards/{{ $card->id }}/notes">
            <div class="form-group">
               <textarea name="body" class="form-control"></textarea>
            </div>
            <!-- The following hidden input field is to prevent the CSRF -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary">Add Note</button>
         </form>
      </div>
   </div>
@stop
