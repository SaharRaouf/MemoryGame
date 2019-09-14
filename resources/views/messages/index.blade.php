@extends('app')

@section('content')

    <h1>Messages</h1>
    <hr/>
    @foreach($messages as $message)
         <article>
             <h2>
                 <a href="{{url('/message',$message->id)}}">{{$message->title}}</a>
             </h2>
             <div class="body">{{$message->body}}</div>
        </article>
    @endforeach
@stop