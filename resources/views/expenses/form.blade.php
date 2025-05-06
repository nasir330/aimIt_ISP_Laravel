@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('expensemenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Create Expense</h4>


		<form hx-post="{% url 'add-expense' %}" class="ml-2">
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="category" class="form-label mb-0">Category</label>
					<select name="category" id="category" class="form-control form-select">
						<option>Select Category</option>
						<option value="{{ 'category.id' }}">
							{{ 'category.name' }}
						</option>
					</select>
				</div>
				<div class="col px-4">
					<label for="manager" class="form-label mb-0">Manager</label>
					<select name="manager" id="manager" class="form-control form-select">
						<option>Select Manager</option>
						<option value="{{ 'manager.id' }}">
							{{ 'manager.username' }}
						</option>
					</select>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="amount" class="form-label mb-0">Amount</label>
					<input type="number" id="amount" name="amount" class="form-control" placeholder="Enter Amount" required>

				</div>
				<div class="col px-4">
					<label for="nas_ports" class="form-label mb-0">Date Time</label>
					<input type="date" id="date" name="date" class="form-control" placeholder="Enter Date" required>
				</div>
			</div>

			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="me-auto p-4">
					<button type="submit" class="btn theme-btn form-control">Submit</button>
				</div>

			</div>
		</form>
	</div>
</div>
@endsection