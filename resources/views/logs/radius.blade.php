@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('logmenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Radius Log</h4>

		<!-- Radius Log table start -->
		@include('logs.bar')
		<div class="px-2">
			<table id="nonOrderListAble" class="text-nowrap w-100">
				<thead>
					<tr>
						<th data-priority="1" style="border-radius: 5px 0px 0px 0px"> Time </th>
						<th>Level/Type</th>
						<th style="border-radius: 0px 5px 0px 0px">Message</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-{{'log.level|lower'}} ">
						<td class="text-center">{{ 'log.timestamp' }}</td>
						<td class="text-center">{{ 'log.level' }}</td>
						<td class="text-left text-wrap">{{ 'log.message' }}</td>
					</tr>					
				</tbody>
			</table>
		</div>
		<!-- Radius Log table end -->
	</div>
</div>
@endsection