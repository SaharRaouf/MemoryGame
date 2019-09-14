@extends('app')
@section('content')
    {!! Form::open(['url'=> 'inquiry']) !!}
<h1>Enkät</h1>

    <!-- body for input -->
    <form method="post" action="/inquiry">
    <div class="form-group">
        <div class="controls">

            {!!Form::label('gender', 'Kön', array('class' => 'control-label')) !!}
            <label class="radio">
                {!!Form::radio('gender', 'M') !!} Kille
            </label>

            <label class="radio">
                {!!Form::radio('gender', 'F') !!} Tjej
            </label>
        </div>
    </div>
        <div class="form-group ">
            {!! Form::label('birth_date', 'Hur gammal är du?')!!}

            {!! Form::input('number','birth_date', $value = null, $options = array())!!}
        </div>
    <div class="form-group">
        {!!Form::label('Question1', '1-Har ni varsin Surfplatta på skolan?', array('class' => 'control-label')) !!}
        <label class="radio">
            {!!Form::radio('answer1', '1') !!} Ja
        </label>
        <label class="radio">
            {!!Form::radio('answer1', '0') !!} Nej
        </label>
    </div>
    <div class="form-group">
        {!!Form::label('Question2', '2-Gör du skoluppgifter på en dator eller en surfplatta?', array('class' => 'control-label')) !!}
        <label class="radio">
            {!!Form::radio('answer2', '1') !!} Ja
        </label>
        <label class="radio">
            {!!Form::radio('answer2', '0') !!} Nej
        </label>
    </div>
    <div class="form-group">
        {!!Form::label('Question3', '3-Pratar ni ett annat språk(modersmål) hemma?', array('class' => 'control-label')) !!}
        <label class="radio">
            {!!Form::radio('answer3', '1') !!} Ja
        </label>
        <label class="radio">
            {!!Form::radio('answer3', '0') !!} Nej
        </label>
    </div>
    <div class="form-group">
        {!!Form::label('Question4', '4-Känner du till Studi.se?', array('class' => 'control-label')) !!}
        <label class="radio">
            {!!Form::radio('answer4', '1') !!} Ja
        </label>
        <label class="radio">
            {!!Form::radio('answer4', '0') !!} Nej
        </label>
    </div>
        <div class="form-group ">
            {!! Form::label('answer5', '5-Hur länge spelar du ett dataspel varje dag?')!!}

            {!! Form::input('number','answer5', $value = null, $options = array())!!}<label>timme\timmar</label>
        </div>
        <div class="form-group ">
            {!! Form::label('answer6', '6-Hur länge pluggar du varje dag?')!!}
            {!! Form::input('number','answer6', $value = null, $options = array())!!}<label>timme\timmar</label>

        </div>

    <div class="form-group ">
        {!! Form::label('body', 'Vill du göra dina läxor på surfplattan? Om ja, hur ska läxan vara?')!!}
        {!! Form::textarea('observation',null,['class'=> 'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('klar!',['class'=> 'btn btn-primary form-control'])!!}
    </div>
</form>
    {!! form::close()!!}
    @include('errors.list')
    @include('partial.footer')
    @stop