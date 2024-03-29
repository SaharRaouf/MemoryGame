@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $baseTopic->title }}: {{ $topic->title }}</h1>

            <div class="progress">
                <div class="progress-bar progress-bar-striped" style="width:{{ ( $questionNumber * 100 ) / count($topic->questions) }}%">

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Fråga #{{ $questionNumber }} <div class="pull-right">{{ $questionNumber }} från {{ count($topic->questions) }}</div>
                </div>
                <div class="panel-body">
                    <p class="lead">{!! $question->renderDescription() !!}</p>

                    {!! Form::open(['class'=>'question ajax challenge ' . $question->question_type]) !!}
                    {!! Form::hidden('questionId', $question->id) !!}

                    @if($question->question_type == 'one_variant')
                        @foreach($answers as $answer)
                            <div class="radio">
                                <label>
                                    {!! Form::radio('chosenAnswer', $answer->id, null, ['id' => $answer->id, 'class' => 'required']) !!}
                                    {{ $answer->description }}
                                </label>
                            </div>
                        @endforeach
                    @else
                        @foreach($answers as $key => $answer)
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('chosenAnswers[]', $answer->id, null, ['id' => $answer->id, 'class' => 'required']) !!}
                                    {{ $answer->description }}
                                </label>
                            </div>
                        @endforeach
                    @endif
                    {!! Form::hidden('url', $next['url'])!!}
                    {!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}

                    <p id="validation-error-container"></p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop