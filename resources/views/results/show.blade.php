@extends('app')

@section('content')

    <h1>Results</h1>
    <hr/>

        <article>
            <h2>
                {{'Your result!'}}
            </h2>
            <div class="body">{{$score}}</div>
        </article>

@stop