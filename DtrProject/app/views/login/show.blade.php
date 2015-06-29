<div class = "container">
<h3>Username: {{ $info-> username }} </h3>

<span>
{{ link_to_route('admin', 'Return Home') }}
<br/><br/>
{{ Form::open(['route' => 'destroy']) }}
{{ Form::hidden('id', $info->id) }}
{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
</span>

</div>