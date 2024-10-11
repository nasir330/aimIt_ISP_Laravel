@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
	<!-- content window start -->
	<div id="zoomIn" class="content-window base-bg">
		<!-- window close button -->
		<div class="d-flex justify-content-end theme-border">
			<form action="{{route('ticketsmenu')}}" method="GET">
				@csrf
				<button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
					<i id="raw-close" class="close-icon fas fa-times text-danger"></i>
				</button>
			</form>
		</div>
		<h4 class="px-4 mt-2">Search User Information</h4>
		
		<!-- search and update button start -->
		<div class="d-flex flex-wrap justify-content-around mb-2">
			<div class="col-md-5 ms-4">
				<form hx-post="{% url 'support-user' %}" hx-target="#randomWindow">
                    {% csrf_token %}
					<label for="username" class="form-label mb-0">Username</label>
					<div class="input-group">
						<input type="text" class="form-control" id="username" name="username" placeholder="Customer's Username" required>
						<button class="btn theme-btn px-5" type="button" id="username">Search</button>
					</div>
				</form>
			</div>
			<div class="col-md-5 ms-4">
				<form>
                    {% csrf_token %}
					<label for="password" class="form-label mb-0">Password</label>
					<div class="input-group">
						<input type="text" class="form-control" id="new_password" name="new_password" placeholder="Customer's New Password" required autofocus>
{#						<button class="btn theme-btn" type="button" id="password">Update Password</button>#}
                        <button id="update-pass" class="btn theme-btn" type="submit" value="update-pass" name="action" data-url="{% url 'update-password' %}"> Update Password </button>
					</div>
				</form>
			</div>
		</div>
		<!-- search and update button end -->
		<!-- action buttons section start -->
{#		<form>#}
{#            {% csrf_token %}#}
            <div class="col mt-3 mb-3">
				<div class="input-group d-flex justify-content-center">
					<button id="activate" class="btn theme-btn ms-1" type="submit" value="activate" name="action" data-url="{% url 'activate-user' %}"> Activate </button>
					<button id="deactivate" class="btn theme-btn ms-1" type="submit" value="deactivate" name="action" data-url="{% url 'deactivate-user' %}"> De-Activate </button>
					<button id="support-sc" class="btn theme-btn ms-1" type="submit" value="support-sc" name="action" data-url="{% url 'session-clear' %}"> Session Clear </button>
					<button id="support-rma" class="btn theme-btn ms-1" type="submit" value="support-rma" name="action" data-url="{% url 'mac-release' %}"> Release Mac Addr. </button>
				</div>
			</div>
{#		</form>#}
		<!-- action buttons section end -->
		<!-- Search result table start -->
        {% if users %}

        <div class="px-2">
            <table id="nonOrderListAble" class="text-nowrap w-100">
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
                {% for user in users %}
                    <tr hx-select=".selected-row" class="unselected-row">
                        <td class="text-center">
                            <input type="checkbox" name="sl[]" id="sl">{{ forloop.counter }}
                        </td>
                        <td>
                            {% if user.user_info %} {{ user.user_info.username }} {% elif user.mac_add %} {{ user.mac_add.username }}
                            {% else %} {{ user.expire.username }} {% endif %}
                        </td>
                        <td>{{ user.user_info.value }}</td>
                        <td>{{ user.expire.value }}</td>
                        <td>{{ user.last_try.authdate|date:'d-m-y h:m:s' }}</td>
                        <td>{{ user.last_successful_try.authdate|date:'d-m-y h:m:s' }}</td>
                        <td>{{ user.mac_add.value }}</td>
                        <td>
                            {% if user.active_status.value == 'Accept' or user.active_status.value == '' %} Active
                            {% elif user.active_status.value == 'Reject' %} Deactivated {% endif %}
                        </td>
                        <td>
                            {% if user.old_mac %}
                                {% for mac in user.old_mac.values %} <p>{{ mac.value }},</p> {% endfor %}
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        {% else %}
            <hr>
            <div class="px-2 text-center">
                <h5>No Users Search.</h5>
            </div>
        {% endif %}
		<!-- Search result table start -->
	</div>
	<!-- content window end -->
</div>
@endsection