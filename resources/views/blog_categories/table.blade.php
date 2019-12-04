<div class="table-responsive">
    <table class="table" id="blogCategories-table">
        <thead>
            <tr>
                <th>Parent Id</th>
        <th>Categorie Url</th>
        <th>Title</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogCategories as $blogCategory)
            <tr>
                <td>{{ $blogCategory->parent_id }}</td>
            <td>{{ $blogCategory->categorie_url }}</td>
            <td>{{ $blogCategory->title }}</td>
            <td>{{ $blogCategory->description }}</td>
                <td>
                    {!! Form::open(['route' => ['blogCategories.destroy', $blogCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogCategories.show', [$blogCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('blogCategories.edit', [$blogCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
