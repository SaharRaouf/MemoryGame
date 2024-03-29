@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>användare: {{ $user->name }} (id: {{ $user->id }})</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">Framsteg i de ämnen</div>
                    <div class="panel-body">
                        @if(count($user->replies))
                            @foreach($topics as $topic)
                                <h3><a href="{{ url('train/'. $topic->name . '/1') }}">{{ $topic->title }}</a></h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: {{ $user->percentCorrectRepliesByTopic($topic) }}%">
                                        {{ $user->percentCorrectRepliesByTopic($topic) }}%

                                    </div>
                                    <div class="progress-bar progress-bar-danger" style="width: {{ $user->percentIncorrectRepliesByTopic($topic) }}%">
                                        {{ $user->percentIncorrectRepliesByTopic($topic) }}%
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div style="text-align: center; color: grey;">
                                <h3>Användaren svarar inte</h3>
                            </div>
                        @endif
                    </div>
                </div>
                <?php echo '<pre>' . var_export($user, true) . '</pre>'; ?>
            </div>
        </div>
    </div>
@endsection
