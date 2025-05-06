@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('routermenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Add Router</h4>

		<form hx-post="" class="ml-2">
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="router_id" class="form-label mb-0">Routers Identity</label>
					<input type="text" id="router_identity" name="router_identity" class="form-control" placeholder="Enter Routers Identity" required>

				</div>
				<div class="col px-4">
					<label for="routers_ip" class="form-label mb-0">Routers IP/Domain</label>
					<input type="text" id="routers_ip" name="routers_ip" class="form-control" placeholder="Enter Routers IP/Domain" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="router_username" class="form-label mb-0">Router Username</label>
					<input type="text" id="router_username" name="router_username" class="form-control" placeholder="Enter router username" required>

				</div>
				<div class="col px-4">
					<label for="router_password" class="form-label mb-0">Router Password</label>
					<input type="text" id="router_password" name="router_password" class="form-control" placeholder="Enter Router Password" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="router_api_port" class="form-label mb-0">Router API Port</label>
					<input type="text" id="router_api_port" name="router_api_port" class="form-control" placeholder="Router API Port" required>

				</div>
				<div class="col px-4">
					<label for="device_value" class="form-label mb-0">Device Values</label>
					<input type="text" id="device_value" name="device_value" class="form-control" placeholder="Enter Device Values" required>
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