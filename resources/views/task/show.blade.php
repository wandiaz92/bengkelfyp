@extends('layouts.default')

@section('content')
  <h1>Task ID: {{ $id }}</h1>
@stop

@section('scripts')
	<script type="text/javascript">
		alert('hellow ' + {{ $id }});
	</script>
@stop
