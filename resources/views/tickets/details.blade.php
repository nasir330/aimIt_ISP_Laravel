@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('ticketslist')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Tickets Details of {{ 'uid' }}</h4>
		<!-- ticket list table start -->
		<div class="px-2">
			<table id="nonOrderListAble" class="text-nowrap w-100 m-auto">
				<thead>
					<tr>
						<th data-priority="1" style="border-radius:5px 0px 0px 0px;"> SL No. </th>
						<th>Username</th>
						<th>Password</th>
						<th>Manager</th>
						<th>Status</th>
						<th>Activation Time</th>
						<th>Expiration Time</th>
						<th style="border-radius:0px 5px 0px 0px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<input type="checkbox" id="check-item" name="check-item">
							{{ 'forloop.counter' }}
						</td>
						<td>{{ 'ticket.username' }}</td>
						<td>{{ 'ticket.password' }}</td>
						<td>{{ 'ticket.manager_name.username' }}</td>
						<td>{{ 'ticket.ticket_status' }}</td>
						<td>{{ 'ticket.ticket_activation_date' }}</td>
						<td>{{ 'ticket.ticket_expiration_date' }}</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- ticket list table end -->
	</div>
	<!-- content window end -->
</div>
@endsection