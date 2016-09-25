@extends('layout')

@section('content')

   <h1>Edit the note</h1>
   <form method="post" action="/notes/{{ $note->id }}">
      {{ method_field('patch') }}
      <div class="form-group">
         <textarea name="body" class="form-control">{{ $note->body }}</textarea>
      </div>
      <!-- The following hidden input field is to prevent the CSRF -->
      <!--<input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
      {{ csrf_field() }}
      <button type="submit" class="btn btn-primary">Update Note</button>
   </form>

@stop
