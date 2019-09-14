@extends('app')

@section('content')
    <h2>Message:</h2>
    <h1>{{$messages->title}}</h1>
    <article>
        {{$messages->body}}
    </article>
    @unless ($messages->tags->isEmpty())
    <h5>Tags</h5>
    <ul>
        @foreach($messages->tags as $tag)
             <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
    @endunless
@stop