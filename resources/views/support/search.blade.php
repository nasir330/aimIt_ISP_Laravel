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
        <h4 class="px-4 mt-2">Search User Information</h4>

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
            <div class="col col-lg-4 px-4">
                <form action="#">
                    <label for="password" class="form-label mb-0">Password</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="new_password" name="new_password" placeholder="Customer's New Password" required autofocus>
                        <button id="update-pass" class="btn theme-btn" type="submit" value="update-pass" name="action" data-url="{% url 'update-password' %}"> Update </button>

                    </div>
                </form>
            </div>
        </div>
        <!-- search and update button end -->

        <!-- Search result table start -->
        <div class="px-2">
            <table id="nonOrderListAble" class="text-nowrap w-100 m-auto">
                <thead>
                    <tr>
                        <th data-priority="1" style="border-radius:5px 0px 0px 0px;">
                            <input type="checkbox" id="sl" name="sl" multiple> S.L
                        </th>
                        <th> Username </th>
                        <th>Password</th>
                        <th>Exp. Date</th>
                        <th>Last Attempt</th>
                        <th>Last Login</th>
                        <th>Rel.Mac.Addr.</th>
                        <th>Status</th>
                        <th data-priority="2" style="border-radius:0px 5px 0px 0px;">Old Mac Addr.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr hx-select=".selected-row" class="unselected-row">
                        <td class="text-center">
                            <input type="checkbox" name="sl[]" id="sl">{{ 'forloop.counter' }}
                        </td>
                        <td>
                            {{'user.user_info'}}
                        </td>
                        <td>{{ 'user.user_info.value' }}</td>
                        <td>{{ 'user.expire.value' }}</td>
                        <td>{{ 'user.last_try.authdate' }}</td>
                        <td>{{ 'user.last_successful_try.authdate' }}</td>
                        <td>{{ 'user.mac_add.value' }}</td>
                        <td>
                            {{'user.active_status.value'}}
                        </td>
                        <td>
                            {{'user.old_mac.values'}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Search result table start -->
    </div>
    <!-- content window end -->
</div>
@endsection