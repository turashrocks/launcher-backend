<table class="table table-responsive" id="builds-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Config File</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($builds as $build)
        <tr>
            <td>{!! $build->name !!}</td>
            <td>{!! $build->config_file !!}</td>
            <td>
                {!! Form::open(['route' => ['builds.destroy', $build->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('builds.show', [$build->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('builds.edit', [$build->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>