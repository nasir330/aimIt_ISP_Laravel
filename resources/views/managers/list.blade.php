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

		<h4 class="px-4 mt-2">Manager List</h4>
		<!-- manager list table start -->
		<div class="px-2">
			<table id="nonOrderListAble" class="text-nowrap w-100">
				<thead>
					<tr>
						<th data-priority="1" style="border-radius:5px 0px 0px 0px;"> SL No. </th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>UserName</th>
						<th>Password</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Sites</th>
						<th data-priority="2" style="border-radius:0px 5px 0px 0px;">Action</th>
					</tr>
				</thead>
				<tbody>
				<tr>
						<td>
							<input type="checkbox" id="check-item" name="check-item">
							{{ 'forloop.counter' }}
						</td>
						<td>{{ 'manager.first_name' }}</td>
						<td>{{ 'manager.last_name' }}</td>
						<td>{{ 'manager.username' }}</td>
						<td>{{ 'manager.password' }}</td>
						<td>{{ 'manager.address' }}</td>
						<td>{{ 'manager.contact_no' }}</td>
						<td>{{ 'manager_site' }}</td>
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
                                        <form action="{{'manageredit'}}" method="post">
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
		<!-- manager list table end -->
	</div>
	<!-- content window end -->
</div>
@endsection