
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js"></script>
    <script src="/js/search.js"></script>

</head>
<body>
@section ('navbar')
    <nav>
        <ul>
            <div id="navlinks">
                <li>{!! Html::link('/', 'HOME', array('id' => 'linkid'))!!}</li>
                <li>{!! Html::link('quizzes', 'QUIZZES', array('id' => 'linkid'))!!}</li>

                <li>
                    <div id="search">
                        <input id="searchBar" type="text" placeholder="Search Quizzes">
                        <div id="tekst"></div
                                ></div>

            </div>
            </li>
            </div>
        </ul>
    </nav>
@show

<div id="contentArea">
    <div id="content">
        @yield ('content')
    </div>
</div>


</body>
</html>