@extends('layouts.master')

@section('title', 'Home')

@section('content')
	<div class="col-md-12">
		<div class="well">
			{!! Form::open(['route' => 'devices.create']) !!}
			<div class="checkbox">
				<label>
					{!! Form::checkbox('start') !!} <b>Start</b>
				</label>
			</div>
			<button type="submit" class="btn btn-lg btn-primary">Simulate New Device</button>
			{!! \Form::close() !!}
		</div>
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">List of devices</div>
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
						<tr>
							<td>{{$loop->index+1}}</td>
							<td><a href="{{route('devices.show',$device->name)}}">{{$device->name}}</a></td>
							<td>{{$device->status}}</td>
							<td>
								{!! Form::open(['route'=>['devices.destroy',$device->name],'method'=>'DELETE',
								'class'=>'form-horizontal',
		   'role'=>'form','onsubmit' => 'return confirm("are you sure ?")'])!!}
								<button type="submit">Delete</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection