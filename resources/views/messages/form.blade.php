
<div class="form-group">
    {!! Form::label('title', 'Name:')!!}
    {!! Form::text('title',null,['class'=> 'form-control'])!!}
</div>
<!-- body for input -->
<div class="form-group ">
    {!! Form::label('body', 'Body:')!!}
    {!! Form::textarea('body',null,['class'=> 'form-control'])!!}
</div>
<!-- published_at form input-->
<div class="form-group ">
    {!! Form::label('published_at', 'Publish on:')!!}
    {!! Form::input('date', 'published_at', date('Y-m-d'),['class'=> 'form-control'])!!}
</div>
<!-- Tag form input-->
<div class="form-group ">
    {!! Form::label('tag_list', 'Tags:')!!}
    {!! Form::select('tag_list[]', $tags ,null,['id' => 'tag_list','class'=> 'form-control','multiple'])!!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=> 'btn btn-primary form-control'])!!}

</div>
@section('footer')
    <script type="text/javascript">
        $('#tag_list').select2({
            placeholder: 'choose a tag'
        });
    </script>
@endsection