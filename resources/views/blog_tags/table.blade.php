<div class="table-responsive">
    <table class="table" id="blogTags-table">
        <thead>
            <tr>
                <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogTags as $blogTag)
            <tr>
                <td>{{ $blogTag->title }}</td>
                <td>
                    {!! Form::open(['route' => ['blogTags.destroy', $blogTag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogTags.show', [$blogTag->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('blogTags.edit', [$blogTag->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
