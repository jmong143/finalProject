
 <br/>
<div class = "container">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><span class = "glyphicon glyphicon-plus"></span> Login</h3>
  </div>
  <div class="panel-body">
    
{{ Form::open(['route' => 'login.process', 'method' => 'POST'])}}

<p>
{{ Form::label('username', 'Username:' )}}<br/>
{{ Form::text('username', null, array('class' => 'form-control')) }}
</p>

<p>
{{ Form::label('password', 'Password:' )}}<br/>
{{ Form::password('password',  null, array('class' => 'form-control')) }}
</p>

<p>
{{ Form::submit(' Login ', array('class' => 'btn btn-primary')) }}
</p>
{{ Form::close() }}
