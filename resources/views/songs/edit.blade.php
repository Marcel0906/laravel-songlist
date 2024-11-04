@extends("songs.layout")
@section("content")
<form method="POST" action="/songs/{{$song->id}}">
    @csrf
    @method("PUT")
    <div>
    <label for="title">Title</label>
    <input name="title" id="title" value="{{$song->title}}">
    </div>
    <div>
    <label for="artist">Artist</label>
    <input name="artist" id="artist" value="{{$song->artist}}">
    </div>
    <input type="submit" value="Create Song">
</form>
@if ($errors->any())
<div>
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif

@endsection

