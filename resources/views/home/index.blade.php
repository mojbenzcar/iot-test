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
						<th>Device </th>
						<th>Status</th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<tr class="success">
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td><a href="{{route('devices.show',"123sdfsdf")}}">view</a></td>
					</tr>
					<tr class="danger">
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td><a href="{{route('devices.show',"123sdfsdf")}}">view</a></td>
					</tr>
					<tr class="warning">
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td><a href="{{route('devices.show',"123sdfsdf")}}">view</a></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection