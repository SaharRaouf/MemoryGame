@extends('app')
@section('content')
    <h1>Send a new message</h1>
    <hr/>
    {!! Form::open(['url'=> 'message']) !!}
@include('messages.form',['submitButtonText'=>'Add Message'])
    {!! Form::close() !!}
@include('errors.list')
@stop