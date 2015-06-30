<br/>
<br/>
<h3>Admin Page</h3>

{{ link_to_route('admin.list', 'List of users') }}
<br/><br/>
{{ Form::open(['route' => 'dtin', 'method' => 'POST'])}}
	{{ Form::submit(' Time In ') }}
{{ Form::close() }}

{{ Form::open(['route' => 'dtout', 'method' => 'POST'])}}
	{{ Form::submit(' Time Out ') }}
{{ Form::close() }}




{{ Form::open(['route' => 'logout', 'method' => 'POST'])}}
	{{ Form::submit(' Logout ') }}
{{ Form::close() }}
