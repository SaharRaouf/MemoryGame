@layout('layouts.master')

@section('content')

    @foreach ($videos as $video)
        <h4>{{ $video->title }}</h4>
        <br>
        <div class="media">
            <div class="media-body">

                    <iframe width="560" height="315" src={{ $video->link + "&output=embed" }} frameborder="0" allowfullscreen>
                    </iframe>
            </div>

        </div>
        <br>
    @endforeach

@endsection