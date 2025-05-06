@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('nasmenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Create Nas</h4>

		<form hx-post="" class="ml-2">
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="nas_name" class="form-label mb-0">NAS IP/FQDN</label>
					<input type="text" id="nas_name" name="nas_name" class="form-control" placeholder="Enter NAS Server IP/FQDN" required>
					<div id="nas-error"></div>
				</div>
				<div class="col px-4">
					<label for="nas_short_name" class="form-label mb-0">NAS ShortName</label>
					<input type="text" id="nas_short_name" name="nas_short_name" class="form-control" placeholder="Enter NAS ShortName" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="nas_type" class="form-label mb-0">NAS Type</label>
					<input type="text" id="nas_type" name="nas_type" class="form-control" placeholder="Enter NAS Type">
				</div>
				<div class="col px-4">
					<label for="nas_ports" class="form-label mb-0">NAS Ports</label>
					<input type="number" id="nas_ports" name="nas_ports" class="form-control" placeholder="Enter NAS Ports" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="nas_secret" class="form-label mb-0">NAS Secret</label>
					<input type="text" id="nas_secret" name="nas_secret" class="form-control" placeholder="Enter NAS Secret" required>
				</div>
				<div class="col px-4">
					<label for="nas_server" class="form-label mb-0">NAS Name</label>
					<input type="text" id="nas_server" name="nas_server" class="form-control" placeholder="Enter NAS Name (Not Required)">
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="nas_community" class="form-label mb-0">NAS Community</label>
					<input type="text" id="nas_community" name="nas_community" class="form-control"  placeholder="Enter NAS Community (Not Required)" required>
					
				</div>
				<div class="col px-4">
				<label for="nas_description" class="form-label mb-0">NAS Description</label>
				<input type="text" id="nas_description" name="nas_description" class="form-control"  placeholder="Enter NAS Name (Not Required)">
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