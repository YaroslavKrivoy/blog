<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $blogArticle->category_id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $blogArticle->user_id }}</p>
</div>

<!-- Tag Id Field -->
<div class="form-group">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    <p>{{ $blogArticle->tag_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blogArticle->title }}</p>
</div>

<!-- Short Description Field -->
<div class="form-group">
    {!! Form::label('short_description', 'Short Description:') !!}
    <p>{{ $blogArticle->short_description }}</p>
</div>

<!-- Article Url Field -->
<div class="form-group">
    {!! Form::label('article_url', 'Article Url:') !!}
    <p>{{ $blogArticle->article_url }}</p>
</div>

<!-- Is Published Field -->
<div class="form-group">
    {!! Form::label('is_published', 'Is Published:') !!}
    <p>{{ $blogArticle->is_published }}</p>
</div>

<!-- Published At Field -->
<div class="form-group">
    {!! Form::label('published_at', 'Published At:') !!}
    <p>{{ $blogArticle->published_at }}</p>
</div>

