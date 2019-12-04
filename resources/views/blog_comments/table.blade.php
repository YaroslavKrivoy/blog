<div class="table-responsive">
    <table class="table" id="blogComments-table">
        <thead>
            <tr>
                <th>Article Id</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogComments as $blogComment)
            <tr>
                <td>{{ $blogComment->article_id }}</td>
            <td>{{ $blogComment->description }}</td>
                <td>
                    {!! Form::open(['route' => ['blogComments.destroy', $blogComment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogComments.show', [$blogComment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('blogComments.edit', [$blogComment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
