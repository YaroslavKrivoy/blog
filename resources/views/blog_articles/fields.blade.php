<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tag Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    {!! Form::number('tag_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    {!! Form::textarea('short_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Article Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('article_url', 'Article Url:') !!}
    {!! Form::text('article_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_published', 'Is Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_published', 0) !!}
        {!! Form::checkbox('is_published', '1', null) !!}
    </label>
</div>


<!-- Published At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published_at', 'Published At:') !!}
    {!! Form::date('published_at', null, ['class' => 'form-control','id'=>'published_at']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#published_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('blogArticles.index') }}" class="btn btn-default">Cancel</a>
</div>
