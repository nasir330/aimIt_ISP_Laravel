@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('inventorymenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Edit Asset</h4>

		<form hx-post="{% url 'update-asset' %}" class="ml-2">
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="device_select" class="form-label mb-0">Device</label>
					<input name="asset_id" value="{{ asset.id }}" hidden>
					<select name="device_select" id="device_select" class="form-control">
						<option value="">Select Device</option>
						{% for device in devices %}
						<option value="{{ device.id }}" {% if asset.device.id == device.id %}
							selected
							{% endif %}>{{ device.name }}</option>
						{% endfor %}
					</select>
				</div>
				<div class="col px-4">
					<label for="site_zones" class="form-label mb-0">Site Zones</label>
					<select name="site_zones" id="site_zones" class="form-control">
						<option value="">Select Zones</option>
						{% for site in sites %}
						<option value="{{ site.id }}" {% if asset.sites_zones.id == site.id %}
							selected
							{% endif %}>{{ site.identity }}</option>
						{% endfor %}
					</select>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="manager" class="form-label mb-0">Manager</label>
					<select name="manager" id="manager" class="form-control">
						<option value="">Select manager</option>
						{% for manager in managers %}
						<option value="{{ manager.id }}" {% if asset.manager.id == manager.id %}
							selected
							{% endif %}>{{ manager.username }}</option>
						{% endfor %}
					</select>
				</div>
				<div class="col px-4">
					<label for="serial_number" class="form-label mb-0">Serial Number</label>
					<input type="text" id="serial_number" name="serial_number" value="{{ asset.serial_number }}" class="form-control" placeholder="Enter serial number" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="ip_address" class="form-label mb-0">IP Address</label>
					<input type="text" id="ip_address" name="ip_address" value="{{ asset.ip_address }}" class="form-control" placeholder="Enter Ip Address" required>
				</div>
				<div class="col px-4">
					<label for="host_name" class="form-label mb-0">Access Host Name</label>
					<input type="text" id="host_name" name="host_name" value="{{ asset.asset_host_name }}" class="form-control" placeholder="Enter Access Host Name" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="comments" class="form-label mb-0">Comments</label>
					<textarea name="comments" id="comments" class="form-control">{{ asset.comment }}</textarea>
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
{% endblock randomwindow %}