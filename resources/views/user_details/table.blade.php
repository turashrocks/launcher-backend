<table class="table table-responsive" id="userDetails-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Address</th>
        <th>Contact Number</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userDetails as $userDetails)
        <tr>
            <td>{!! $userDetails->name !!}</td>
            <td>{!! $userDetails->address !!}</td>
            <td>{!! $userDetails->contact_number !!}</td>
            <td>
                {!! Form::open(['route' => ['userDetails.destroy', $userDetails->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userDetails.show', [$userDetails->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userDetails.edit', [$userDetails->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>