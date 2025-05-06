@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
		<form action="{{route('dashboard')}}" method="POST">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Reports</h4>

		<form hx-post="#" class="ml-2">
			<!-- search by manager and zone start -->
			<div class="d-flex flex-lg-row flex-column justify-content-between mb-2">
			<div class="col col-lg-5 px-4">
					<label for="manager" class="form-label mb-0">Manager</label>
					<select name="manager" id="manager" class="form-control form-select">
						<option>Select Manager</option>
						<option value="{{ 'manager.id' }}">
							{{ 'manager.username' }}
						</option>
					</select>
				</div>
				<div class="col col-lg-5 px-4">
					<label for="zone" class="form-label mb-0">Using Zone</label>
					<select name="zone" id="zone" class="form-control form-select">
						<option value="">Select Using Zone</option>
						<option value="{{ 'site.identity' }}">
							{{ 'site.identity' }}
						</option>
					</select>
				</div>
			</div>
			<!-- search by manager and zone end -->

			<!-- search by date start -->
			<div class="d-flex flex-lg-row flex-column justify-content-between mb-2">
			<div class="col col-lg-5 px-4">
					<label for="date_from" class="form-label mb-0">From</label>
					<input type="date" name="date_from" id="date_from" class="form-control">
				</div>
				<div class="col col-lg-5 px-4">
					<label for="date_to" class="form-label mb-0">To</label>
					<input type="date" name="date_to" id="date_to" class="form-control">
				</div>
			</div>
			<!-- search by date end -->

			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="me-auto p-4">
					<button type="submit" class="btn theme-btn form-control">Submit</button>
				</div>

			</div>
		</form>
		<!-- search by date end -->
		<!-- search result table start -->
		<div id="table-result" class="px-2">
			@include('reports.date')
		</div>
		<!-- search result table end -->
	</div>
	<!-- content window end -->
</div> 
@endsection