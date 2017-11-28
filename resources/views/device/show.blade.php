@extends('layouts.master')

@section('title', 'Home')

@section('content')
	<div class="col-md-6">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">New vs Returning Visitors</div>

				<div class="panel-options">
					<a href="#" data-rel="collapse">running</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-xs dropdown-toggle"
							data-toggle="dropdown">
						<div class="glyphicon glyphicon-cog"></div>
						<span
								class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Start</a></li>
						<li><a href="#">Stop</a></li>
						<li><a href="#">Restart</a></li>
					</ul>
				</div>
				Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu

				<br><br>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Device History</div>

				<div class="panel-options">
					<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
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
					<tr class="success">
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr class="danger">
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr class="warning">
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection