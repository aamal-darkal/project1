
@extends('layout')
@section('content')
<h1>Contact Us.</h1>
<p>Please contact us by sending a message using the form below:</p>
{{$m}} <br/>
{{$school}}
{{ Form::open(['url' => 'contact']) }}
{{ Form::label('Subject') }}
{{ Form::text('subject','Enter your subject') }}
<br />
{{ Form::label('Message') }}
{{ Form::textarea('message','Enter your message') }}
{!! Form::label('<b>date </b>') !!}
{!! Form::date('dd') !!}
<br />
{{ Form::submit() }}

{{ Form::close() }}

@stop
