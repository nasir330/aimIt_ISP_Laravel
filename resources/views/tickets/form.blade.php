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
		<h4 class="px-4 mt-2">Create Ticket</h4>
		<form hx-post="#" class="ml-2">
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="number_of_tickets" class="form-label mb-0">Number of Tickets</label>
					<input type="text" id="number_of_tickets" name="number_of_tickets" class="form-control" placeholder="Enter Number of Tickets" required>
				</div>
				<div class="col px-4">
					<label for="package" class="form-label mb-0">Package</label>
					<select name="package" id="package" class="form-control form-select">
						<option value="">Select Package</option>
						<option value="{{ 'package.id' }}">
							{{ 'package.package_name' }}
						</option>
					</select>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="manager_name" class="form-label mb-0">Manager Name</label>
					<select name="manager_name" id="manager_name" class="form-control form-select">
						<option value="">Select Manager</option>
						<option value="{{ 'manager.id' }}">
							{{ 'manager.username' }}
						</option>
					</select>
				</div>
				<div class="col px-4">
					
				</div>
			</div>

			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="me-auto p-4">
					<button type="submit" class="btn theme-btn form-control">Submit</button>
				</div>

			</div>
		</form>
	</div>
	<!-- content window end -->
</div>
@endsection