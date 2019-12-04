<div class="table-responsive">
    <table class="table" id="blogArticles-table">
        <thead>
            <tr>
                <th>Category Id</th>
        <th>User Id</th>
        <th>Tag Id</th>
        <th>Title</th>
        <th>Short Description</th>
        <th>Article Url</th>
        <th>Is Published</th>
        <th>Published At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogArticles as $blogArticle)
            <tr>
                <td>{{ $blogArticle->category_id }}</td>
            <td>{{ $blogArticle->user_id }}</td>
            <td>{{ $blogArticle->tag_id }}</td>
            <td>{{ $blogArticle->title }}</td>
            <td>{{ $blogArticle->short_description }}</td>
            <td>{{ $blogArticle->article_url }}</td>
            <td>{{ $blogArticle->is_published }}</td>
            <td>{{ $blogArticle->published_at }}</td>
                <td>
                    {!! Form::open(['route' => ['blogArticles.destroy', $blogArticle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogArticles.show', [$blogArticle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('blogArticles.edit', [$blogArticle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
