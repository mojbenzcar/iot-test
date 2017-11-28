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
			<button type="submit" class="btn btn-lg btn-block btn-primary">Create New Device</button>
			{!! \Form::close() !!}

		</div>
	</div>
	<div class="col-md-4">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">New vs Returning Visitors</div>
				<div class="panel-options">
					<a href="#" data-rel="collapse">running</a>
				</div>
			</div>
			<div class="panel-body">
				Ut tristique adipiscing mauris,
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">New vs Returning Visitors</div>
				<div class="panel-options">
					<div class="panel-options">
						<a href="#" data-rel="collapse">running</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				Ut tristique adipiscing mauris, sit
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">New vs Returning Visitors</div>
				<div class="panel-options">
					<a href="#" data-rel="collapse">running</a>
				</div>
			</div>
			<div class="panel-body">
				Ut tristique adipiscing mauris, sit<br>
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
				<br>
				Start Date <br>
				Send Report<br>
			</div>
		</div>
	</div>

@endsection