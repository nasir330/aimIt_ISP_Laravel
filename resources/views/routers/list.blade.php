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


		<!-- device status shortcut start -->
		<div class="sticky-top d-flex justify-content-around align-items-center flex-wrap w-100 pb-2"
			hx-post="{% url 'router-status-check' %}" hx-headers='{"X-CSRFToken": "{{ "csrf_token" }}"}'
			hx-trigger="load, every 10s">

		</div>
		<!-- device status shortcut end -->
		<!-- device list start -->
		<div class="device-list">
		<div class="d-flex justify-content-start flex-wrap icon-window">
				<div class="lg-menu-item col-md-4 offset-md-1 mb-1 mt-2 text-center" hx-get="{% url 'router-info' router.id %}" hx-trigger="load, every 10s">

				</div>
			</div>
			<!-- device list end -->
		</div>
	</div>
</div>
@endsection