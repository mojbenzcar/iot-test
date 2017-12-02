@extends('layouts.master')

@section('title', 'Home')

@section('content')
	@if (!empty($device))
		<div class="col-md-7" device="{{$device->name}}" id="simulated_device">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">{{$device->name}} </div>
					<span class="Status btn btn-xs btn-success" v-if="deviceStatus=='on'"><i>
						Running</i></span>
					<span class="Status btn btn-xs btn-danger" v-if="deviceStatus=='stop'"><i>
							Stopped</i></span>
					<div class="panel-options">
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown">
								<div class="glyphicon glyphicon-cog"></div>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a v-on:click="startDevice" href="javascript:void(0)">Start</a></li>
								<li><a v-on:click="stopDevice" href="#">Stop</a></li>
								<li><a v-on:click="sendDeviceReport" href="#">Send Report</a></li>
							</ul>
						</div>
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
				</div>
			</div>
		</div>
	@endif
	<div class="content-box-large">
		<div class="panel-body">
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>Device</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				@foreach($devices as $device)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$device->name}}</td>
						<td><a class="btn btn-default" href="{{route('devices',['device'=>$device->name])
						}}">Simulate</a></td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
@section('script')
	<script src="{{asset("js/app.js")}}"></script>

@endsection