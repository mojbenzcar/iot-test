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
					<th>Datetime</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				@foreach($device->history as $history)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$history->event}}</td>
						<td>{{$history->created_at}}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>