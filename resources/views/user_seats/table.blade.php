<table class="table table-responsive" id="userSeats-table">
    <thead>
        <tr>
            <th>Pc Uid</th>
        <th>Pc Name</th>
        <th>Installation Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userSeats as $userSeats)
        <tr>
            <td>{!! $userSeats->pc_uid !!}</td>
            <td>{!! $userSeats->pc_name !!}</td>
            <td>{!! $userSeats->installation_date !!}</td>
            <td>
                {!! Form::open(['route' => ['userSeats.destroy', $userSeats->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userSeats.show', [$userSeats->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userSeats.edit', [$userSeats->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>