@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('ticketsmenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Ticket List</h4>
		<!-- ticket list table start -->
		<div class="px-2">
			<table id="nonOrderListAble" class="text-nowrap w-100 m-auto">
				<thead>
					<tr>
						<th data-priority="1" style="border-radius:5px 0px 0px 0px;"> SL No. </th>
						<th data-priority="2">Unique ID.</th>
						<th>Creation Time</th>
						<th>Manager Name</th>
						<th>Total Tickets</th>
						<th>Inactive Tickets</th>
						<th>Active Tickets</th>
						<th>Manager Sell</th>
						<th style="border-radius:0px 5px 0px 0px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>OLI68KR</td>
						<td>Sept. 24, 2023, 7:03 p.m</td>
						<td>fm</td>
						<td>100</td>
						<td>100</td>
						<td>0</td>
						<td>0</td>						
						<td>
							<table>
								<tr>
									<!-- view button start-->
									<td>
									<form action="{{'ticketslistview'}}" method="post" target="_blank">
											@csrf
											<input type="text" name="uid" value="{{ 'ticket.uid_info' }}" hidden>
											<button type="submit" class="btn btn-outline-secondary">
												<i class="actionIcon fa fa-list"></i>
											</button>
										</form>
									</td>
									<!-- view button end-->
									<!-- print button start-->
									<td>
										<form action="#" method="post" target="_blank">
											@csrf
											<button type="submit" class="btn btn-outline-secondary">
												<i class="actionIcon fa-solid fa-print"></i>
											</button>
										</form>
									</td>
									<!-- print button end-->
									<!-- Tharmal print button start-->
									<td>
										<form action="#" method="post" target="_blank">
											@csrf
											<button type="submit" class="btn btn-outline-secondary">
												<i class="actionIcon fa-solid fa-print text-warning"></i>
											</button>
										</form>
									</td>
									<!--Tharmal  print button end-->
									<!-- Delete button start-->
									<td>
										<form hx-post="#" hx-target="#randomWindow">
											@csrf
											<button type="submit" class="btn btn-outline-secondary">
												<i class="actionIcon fas fa-trash"></i>
											</button>
										</form>
									</td>
									<!-- Delete button end-->
								</tr>
							</table>
						</td>
					</tr>
			</table>
		</div>
		<!-- ticket list table end -->
	</div>
	<!-- content window end -->
</div>
@endsection