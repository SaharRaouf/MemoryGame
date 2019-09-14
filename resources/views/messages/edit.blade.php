@extends('app')
@section('content')
    <h1>Edit: </h1>
    <h2>{!! $messages->title !!}</h2>
    <hr/>

    {!! Form::model($messages,['method'=>'PATCH','action'=> ['MessageController@update', $messages->id]]) !!}

@include('messages.form',['submitButtonText'=>'edit message'])

    {!! Form::close() !!}

@include('errors.list')
@stop