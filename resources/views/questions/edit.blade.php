<div class="span16">
    <ul class="breadcrumb span6">
        <li>
            <a href="{{URL::to('questions')}}">Questions</a> <span class="divider">/</span>
        </li>
        <li class="active">Editing Question</li>
    </ul>
</div>

{{Form::open(null, 'post', array('class' => 'form-stacked span16'))}}
<fieldset>
    <div class="clearfix">
        {{Form::label('title', 'Title')}}

        <div class="input">
            {{Form::text('title', Input::old('title', $question->title), array('class' => 'span6'))}}
        </div>
    </div>

    <div class="actions">
        {{Form::submit('Save', array('class' => 'btn primary'))}}

        or <a href="{{URL::to(Request::referrer())}}">Cancel</a>
    </div>
</fieldset>
{{Form::close()}}