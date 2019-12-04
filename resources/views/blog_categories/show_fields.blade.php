<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    <p>{{ $blogCategory->parent_id }}</p>
</div>

<!-- Categorie Url Field -->
<div class="form-group">
    {!! Form::label('categorie_url', 'Categorie Url:') !!}
    <p>{{ $blogCategory->categorie_url }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blogCategory->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $blogCategory->description }}</p>
</div>

