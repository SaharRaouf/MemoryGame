@if (Session::has('flash_message'))
    <div class="alert alert_success {{ Session::get('flash_message') ? 'alert-important':'' }}">
        @if(Session::has('flash_message_important'))
            <button type="button" class="close" data_dismiss="alert" aria-hidden="true">&times;</button>
        @endif
        {{Session('flash_message')}}
    </div>
@endif