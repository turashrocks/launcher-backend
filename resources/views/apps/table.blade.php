<table class="table table-responsive" id="apps-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Build Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($apps as $app)
        <tr>
            <td>{!! $app->app_name !!}</td>
            <td>{!! $app->app_description !!}</td>
            <td>{!! $app->build_name !!}</td>
           
            <td>
                {!! Form::open(['route' => ['apps.destroy', $app->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('apps.show', [$app->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('apps.edit', [$app->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>