Welcome user
<br/>
<br/>
{{ Form::open(['route' => 'dtin', 'method' => 'POST'])}}
	{{ Form::submit(' Time In ') }}
{{ Form::close() }}

{{ Form::open(['route' => 'dtout', 'method' => 'POST'])}}
	{{ Form::submit(' Time Out ') }}
{{ Form::close() }}



<table border = "1">
  <thead>

  <tr>
      <th>Date Time Record</th>
    </tr>
  </thead>
  <tbody>
@foreach($userList as $userlist)
  <tr class = "primary">		
      <td>{{ link_to_route('view', $userlist->datetime, array($userlist->id)) }}</td>
    </tr>
    </tbody>
@endforeach
    </table>


{{ Form::open(['route' => 'logout', 'method' => 'POST'])}}
	{{ Form::submit(' Logout ') }}
{{ Form::close() }}
