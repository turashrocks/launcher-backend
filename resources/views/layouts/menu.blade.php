
<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('builds.index') !!}"><i class="fa fa-edit"></i><span>Builds</span></a>
</li>

<li class="{{ Request::is('qrcodes*') ? 'active' : '' }}">
    <a href="{!! route('apps.index') !!}"><i class="fa fa-edit"></i><span>Apps</span></a>
</li>

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('groups.index') !!}"><i class="fa fa-edit"></i><span>Groups</span></a>
</li>

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('groupAppBuilds.index') !!}"><i class="fa fa-edit"></i><span>Groups-Apps-Builds</span></a>
</li>

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('tags.index') !!}"><i class="fa fa-edit"></i><span>Tags</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('userDetails.index') !!}"><i class="fa fa-edit"></i><span>User Details</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('userSeats.index') !!}"><i class="fa fa-edit"></i><span>User Seats</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('userSubscriptions.index') !!}"><i class="fa fa-edit"></i><span>User Subscriptions</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

