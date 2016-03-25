@extends('layout') @section('content')

<div class="row">
  <div class="col-sm-6 col-sm-offset-3">

    <h1>{{ $card->title}}</h1>
    <ul class="list-group">
      @foreach ($card->notes as $note)
      <li class="list-group-item">
        {{ $note->body }} <a class="pull-right" href="{{ $note->user_id }}">| by {{ $note->user->username }}</a><a class="pull-right" href="/notes/{{$note->id}}/edit">edit |</a>
      </li>
      @endforeach
    </ul>
    <hr>


    <h3>Add a New note</h3>
    <form action="/cards/{{ $card->id }}/notes" method="POST">
      <div class="form-group">
          <textarea name="body" class="form-control">{{ old('body') }}</textarea>
      </div>
      @if (count($errors))
        <ul>
          @foreach ($errors->all() as $error)
            <li class="alert">{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <div class="form-group">

        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
</div>
