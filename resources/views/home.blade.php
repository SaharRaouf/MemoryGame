@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h4>Först lyssna på lektionen :</h4>
                <div>
                    <a href="{{ url('videos') }}" class="btn btn-warning" role="button" >tryck här!</a>
                </div>
                <h1>resultat</h1>

                @foreach($baseTopics as $baseTopic)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $baseTopic->title }}</div>
                        <div class="panel-body">
                            @if(count($user->replies))
                                @foreach($baseTopic->topics as $topic)
                                    <h3><a href="{{ url('train/'. $baseTopic->name . '/' . $topic->name . '/1') }}">{{ $topic->title }}</a></h3>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: {{ $user->percentCorrectRepliesByTopic($topic) }}%">
                                            {{ $user->percentCorrectRepliesByTopic($topic) }}%

                                        </div>
                                        <div class="progress-bar progress-bar-danger" style="width: {{ $user->percentIncorrectRepliesByTopic($topic) }}%">
                                            {{ $user->percentIncorrectRepliesByTopic($topic) }}%
                                        </div>
                                    </div>
                                <div> @if( ($user->percentCorrectRepliesByTopic($topic))=='100')
                                        <img src="{{asset('images/nr1.png')}}"  />
                                          @elseif(($user->percentCorrectRepliesByTopic($topic))>='70' && ($user->percentCorrectRepliesByTopic($topic))<'100')
                                        <img src="{{asset('images/golden.png')}}"  />
                                    @elseif(($user->percentCorrectRepliesByTopic($topic))>='50' && ($user->percentCorrectRepliesByTopic($topic))<'70')
                                        <img src="{{asset('images/silver.png')}}"  />
                                    @elseif(($user->percentCorrectRepliesByTopic($topic))>='30' && ($user->percentCorrectRepliesByTopic($topic))<'50')
                                        <img src="{{asset('images/bronz.png')}}"  />
                                    @elseif(($user->percentCorrectRepliesByTopic($topic))>='10' && ($user->percentCorrectRepliesByTopic($topic))<'30')
                                        <img src="{{asset('images/nr0.jpg')}}"  />
                                        @else
                                        <img src="{{asset('images/noAnswer.png')}}"  />
                                    @endif
                                </div>

                                @endforeach
                            @else
                                <div style="text-align: center; color: grey;">
                                    <h3>Svara på frågorna och se hur mycket du klarar av!</h3>
                                    <p class="lead" >gå till frågorna:<a href="/train">här</a>.</p>
                                </div>
                            @endif

                        </div>
                    </div>
                @endforeach
                <h4>Glöm inte att svara på enkäten :</h4>
                <div>
                    <a href="{{ url('inquiry') }}" class="btn btn-warning" role="button" >tryck här!</a>
                </div>
            </div>


        </div>

    </div>

    @include('partial.footer')
@endsection
