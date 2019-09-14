@extends('layouts.master')
@extends('app')

@section('content')

    <div>
        @foreach($videos as $video)
            <br><br><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$video -> youtube_url}}" frameborder="0" allowfullscreen></iframe>
            <h2>{{$video->name }}</h2>
            <h3>Årskurs:  {{ $video->grade }} </h3>
            <h5>Instruktion:{{$video->description}}</h5><br>
            <h4>Se hur mycket du har lärt dig:</h4>
            <div>
            <a href="{{ url('train') }}" class="btn btn-warning" role="button" >tryck här!</a>
            </div>

        @endforeach
    </div>
@endsection