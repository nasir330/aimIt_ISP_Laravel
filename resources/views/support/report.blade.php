@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
    <!-- content window start -->
    <div id="zoomIn" class="content-window base-bg">
        <!-- window close button -->
        <div class="d-flex justify-content-end theme-border">
            <form action="{{route('supportmenu')}}" method="GET">
                @csrf
                <button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
                    <i id="raw-close" class="close-icon fas fa-times text-danger"></i>
                </button>
            </form>
        </div>
        <h4 class="px-4 mt-2">Generate User Report</h4>

        <!-- search and update button start -->
        <div class="d-flex flex-lg-row flex-column justify-content-between mb-1">
            <div class="col col-lg-4 px-4">
                <form action="#">
                    <label for="username" class="form-label mb-0">Username</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Customer's Username" required>
                        <button class="btn theme-btn" type="submit" id="username">Search</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- search and update button end -->

        <!-- seatch result table start -->
        <h5 class="px-4 mt-3">User Usage Report</h5>
        <div class="px-2">
            <table id="nonOrderListAble" class="text-nowrap w-100 m-auto">
                <thead>
                    <tr>
                        <th data-priority="1" style="border-radius:5px 0px 0px 0px;">Username</th>
                        <th>Router Name</th>
                        <th>HotSpot Name</th>
                        <th>Mac Address</th>
                        <th>Session Start</th>
                        <th>Session Stop</th>
                        <th data-priority="2" style="border-radius:0px 5px 0px 0px;">Session Update</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" id="check-item" name="check-item">
                            {{' data.username' }}
                        </td>
                        <td>{{ 'data.nasidentifier' }}</td>
                        <td>{{ 'data.calledstationid' }}</td>
                        <td>{{ 'data.callingstationid' }}</td>
                        <td>{{ 'data.acctstarttime' }}</td>
                        <td>{{ 'data.acctstoptime' }}</td>
                        <td>{{ 'data.acctupdatetime'}}</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- seatch result table start -->
    </div>
    <!-- content window end -->
</div>
@endsection