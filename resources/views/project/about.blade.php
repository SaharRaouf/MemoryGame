@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Lite om mig!</h1>
                <div class="panel panel-default">
                    <div class="panel-body">


                        <p>Den här siten är resultat av ett examenarbete om motivera studenter att lära sig mer på egen hand!</p>
                        <p><b>Hur:</b>Med hjälp av rätt spell elementer i programmet för att göra roligare att lära sig mer.</p>

                        <h2>******</h2>
                        <img src="https://s.gravatar.com/avatar/e9a2c151d84d83237b12646c8cd94906?s=80" class="img-thumbnail" style="float: left; margin:7px;">
                        <p>Hej!</p>
                        <p>Mitt namn är Sahar och studerar Datateknik på KTH. </p>
                        <p>Jag alltid velat att forska om motivation och genom examensarbetet fick jag chansen att göra det! .</p>


                        <p>Har du synpunkter eller frågor tveka inte att kontakta mig på min mail:<a href="mailto:info@gamifystudy.com">info@gamifystudy.com</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partial.footer')
@stop
