<table class="table table-responsive" id="userSubscriptions-table">
    <thead>
        <tr>
            <th>Expire Date</th>
        <th>Pcs Assigned</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userSubscriptions as $userSubscriptions)
        <tr>
            <td>{!! $userSubscriptions->expire_date !!}</td>
            <td>{!! $userSubscriptions->pcs_assigned !!}</td>
            <td>{!! $userSubscriptions->status !!}</td>
            <td>
                {!! Form::open(['route' => ['userSubscriptions.destroy', $userSubscriptions->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userSubscriptions.show', [$userSubscriptions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userSubscriptions.edit', [$userSubscriptions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>