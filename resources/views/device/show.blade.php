@extends('layouts.master')

@section('title', 'Home')

@section('content')
	<div class="col-md-6">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">{{$device->name}}</div>

				<div class="panel-options">
					<a href="#" data-rel="collapse">{{$device->status}}</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="device-information">
					<div class="device">
						<span class="">User: {{$device->user}}</span>
						<span class="">Created At: {{$device->created_at}}</span>
						<span class="">Start Time: {{$device->start_time}}</span>
					</div>
				</div>

				<br><br>
				<div class="well">
					{!! Form::open(['route' => ['devices.notification',$device->name]]) !!}
					<button type="submit" class="btn btn-lg btn-block btn-primary">Send Report Command</button>
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
	@include('device._partials.history', ['device' => $device])
@endsection