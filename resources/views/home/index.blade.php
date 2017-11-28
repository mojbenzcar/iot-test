@extends('layouts.master')

@section('title', 'Home')

@section('content')
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">List of devices</div>

				<div class="panel-options">
					<a href="#" data-rel="collapse">running</a>
				</div>
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th>Device</th>
						<th>Status</th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					@foreach($devices as $device)
						<tr class="success">
							<td>{{$loop->index+1}}</td>
							<td>{{$device->name}}</td>
							<td>{{$device->status}}</td>
							<td><a href="{{route('devices.show',$device->name)}}">view</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection