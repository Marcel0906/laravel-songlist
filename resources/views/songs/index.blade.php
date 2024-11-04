@extends("songs.layout")
@section("content")
<ul>
    @foreach ($songs as $song )
    <li>
        <a href="/songs/{{$song->id}}">
    {{$song->title}}
</a> von {{$song->artist}}
<form action="/songs/{{$song->id}}" method="POST">
    @csrf
    @method("DELETE")
    <button>Delete Song</button>
</form>
</li>
    @endforeach
    <!-- <a href="{{route("meinbeispiel")}}">mein Beispiel</a> -->

</ul>

<h2>
<a href="/songs/create">Create Song</a>
</h2>
<p>
<a href="/users">Show me the registered Users</a>
</p>
@endsection
