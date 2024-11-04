@extends("songs.layout")
@section("content")

  <p> {{$song->title}} von {{$song->artist}}</p>

@endsection
