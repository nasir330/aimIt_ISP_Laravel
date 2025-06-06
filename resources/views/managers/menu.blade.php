@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<div id="zoomIn" class="menu-window base-bg d-flex flex-column">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('dashboard')}}" method="POST">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<div class="d-flex justify-content-around align-items-center vh-100 icon-window">
			<div class="col-auto text-center" hx-get="{% url 'create-managers' %}" hx-push-url="true" hx-target="#randomWindow">
				<a href="{{ route('createmanager') }}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
					<i class="icon fa-thin fa-user-tie"></i>
					<p>Create Manager</p>
				</a>

			</div>
			<div class="col-auto text-center" hx-get="{% url 'managers-list' %}" hx-push-url="true" hx-target="#randomWindow">
				<a href="{{ route('managerslist') }}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
					<i class="icon fa-thin fa-list"></i>
					<p>Manager List</p>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection