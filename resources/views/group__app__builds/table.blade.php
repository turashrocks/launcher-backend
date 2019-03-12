<table class="table table-responsive" id="groupAppBuilds-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>App Id</th>
        <th>Build Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($groupAppBuilds as $groupAppBuild)
        <tr>
            <td>{!! $groupAppBuild->name !!}</td>
            <td>{!! $groupAppBuild->app_id !!}</td>
            <td>{!! $groupAppBuild->build_id !!}</td>
            <td>
                {!! Form::open(['route' => ['groupAppBuilds.destroy', $groupAppBuild->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('groupAppBuilds.show', [$groupAppBuild->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('groupAppBuilds.edit', [$groupAppBuild->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>