<br/>
<br/>
<h3>Admin Page</h3>

<table border = "1">
  <thead>

  <tr>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
@foreach($recordList as $userview)
  <tr class = "primary">		
      <td>{{ link_to_route('view', $userview->username, array($userview->id), array('class' => 'text text-info btn-lg')) }}</td>
    </tr>
    </tbody>
@endforeach
    </table>
    
    <br/>
{{ Form::open(['route' => 'logout', 'method' => 'POST'])}}
	{{ Form::submit(' Logout ') }}
{{ Form::close() }}
