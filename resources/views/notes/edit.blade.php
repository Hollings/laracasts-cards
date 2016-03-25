@extends('layout')

@section('content')
<h1>edit the note</h1>

<h3>Add a New note</h3>
<form method="post" action="/notes/{{$note->id}}">
  {{ method_field('PATCH') }}
  <div class="form-group">
      <textarea name="body" class="form-control">{{ $note->body }}</textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" name="button">Submit</button>
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>


@stop
