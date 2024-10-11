@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('packagemenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Create Package</h4>

		<form hx-post="#" class="ml-2">
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="package_name" class="form-label mb-0">Package Name</label>
					<input type="text" id="package_name" name="package_name" class="form-control" placeholder="Enter Package Name" required>
				</div>
				<div class="col px-4">
					<label for="package_price" class="form-label mb-0">Package Price</label>
					<input type="text" id="package_price" name="package_price" class="form-control" placeholder="Enter Package Price" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="account_type" class="form-label mb-0">Account Type</label>
					<select name="account_type" id="account_type" class="form-control form-select">
						<option value="">Select Account Type</option>
						<option value="{{ 'account_type.service_name' }}">
							{{ 'account_type.service_show_name' }}
						</option>
					</select>
				</div>
				<div class="col px-4">
					<label for="duration_type" class="form-label mb-0">Duration Type</label>
					<select name="duration_type" id="duration_type" class="form-control form-select">
						<option value="">Select Duration Type</option>
						<option value="{{ 'package_type.package_duration_name' }}">
							{{ 'package_type.package_duration_show_name' }}
						</option>
					</select>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
				<label for="duration_value" class="form-label mb-0">Duration Value</label>
				<input type="text" id="duration_value" name="duration_value" class="form-control" placeholder="Enter duration_value" required>
				</div>
				<div class="col px-4">
				<label for="allowed_device" class="form-label mb-0">Allowed Device</label>
				<input type="text" id="allowed_device" name="allowed_device" class="form-control" placeholder="Enter Allowed Device" required>
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