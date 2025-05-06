@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('managermenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Create Manager</h4>

		<form hx-post="{% url 'create-user' %}" class="ml-2">
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="first_name" class="form-label mb-0">First Name</label>
					<input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name" required>
				</div>
				<div class="col px-4">
					<label for="last_name" class="form-label mb-0">Last Name</label>
					<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name" required>
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="username" class="form-label mb-0">Username</label>
					<input type="text" id="username" name="username" class="form-control" hx-post="{% url 'username_check' %}" hx-trigger="keyup delay:1s" hx-target="#username-error" hx-swap="outerHTML" placeholder="Enter Username" required>
					<div id="username-error"></div>
				</div>
				<div class="col px-4">
					<label for="password" class="form-label mb-0">Password</label>
					<div class="input-group">
						<input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
						<div class="input-group-text">
							<span class="field-icon toggle-password">
								<i id="toggleIcon" class="fas fa-eye"></i>
							</span>
						</div>
					</div>
					<!-- <span  id="basic-addon1"><i class="fa-solid fa-eye field-icon"></i></span> -->
				</div>
			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="address" class="form-label mb-0">Address</label>
					<input type="text" id="address" name="address" class="form-control" placeholder="Enter Address">
				</div>
				<div class="col px-4">
					<label for="user_phone" class="form-label mb-0">Phone</label>
					<input type="number" id="user_phone" name="user_phone" class="form-control" placeholder="Enter Phone Number" required>
				</div>

			</div>
			<div class="d-flex flex-lg-row flex-column justify-content-around mb-2">
				<div class="col px-4">
					<label for="site-in-charge" class="form-label mb-0">Site In-Charge</label>
					<select name="site-in-charge" id="site-in-charge" multiple class="form-control multi-multiple">
						<option value="">Select Using Zone</option>
						<option value="{{ 'site.id' }}">
							{{ 'site.identity' }}
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