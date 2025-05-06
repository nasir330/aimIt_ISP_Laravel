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
		<h4 class="px-4 mt-2">Expenses List</h4>

		<!-- expense list table start -->
		<div class="px-2">
			<table id="nonOrderListAble" class="text-nowrap w-100 m-auto">
				<thead>
					<tr>
						<th data-priority="1" style="border-radius:5px 0px 0px 0px;"> SL No. </th>
						<th>Category</th>
						<th>Manager</th>
						<th>Date</th>
						<th>Amount</th>
						<th>Comment</th>
						<th data-priority="2" style="border-radius:0px 5px 0px 0px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<input type="checkbox" id="check-item" name="check-item">
							{{ 'forloop.counter' }}
						</td>
						<td>{{ 'expense.category' }}</td>
						<td>{{ 'expense.manager' }}</td>
						<td>{{ 'expense.date' }}</td>
						<td>{{ 'expense.amount' }}</td>
						<td>{{ 'expense.comment' }}</td>
						<td>
							<table>
								<tr>
									<td>
										<form hx-post="#" hx-target="#randomWindow" _="on htmx:confirm(issueRequest) halt the event call Swal.fire({title: 'Are you sure?',
                                        html: 'Input <code><i><b>\'{{ 'user.username' }}\'</b></i></code> to delete the package? You won\'t be able to revert this!',
                                        input: 'text',
                                        inputAttributes: {
                                          autocapitalize: 'off'
                                        },
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                        })
                                        if result.isConfirmed issueRequest()">
											@csrf
											<input value="{{ 'user.id' }}" name="id" hidden>
											<button class="btn btn-outline-secondary" type="submit">
												<i class="actionIcon fas fa-trash"></i>
											</button>
										</form>
									</td>
									<td>
										<form action="{{'usersedit'}}" method="post">
											@csrf
											<input value="{{ 'user.id' }}" name="id" hidden>
											<button class="btn btn-outline-secondary" type="submit">
												<i class="actionIcon fas fa-edit"></i>
											</button>
										</form>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- ticket list table end -->
	</div>
	<!-- content window end -->
</div>
@endsection