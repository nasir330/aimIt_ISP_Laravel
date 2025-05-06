<div class="btn-toolbar justify-content-center pb-2" role="toolbar" aria-label="Toolbar with button groups">
	<div class="btn-group mr-2" role="group" aria-label="Radius">
		<a class="btn btn-outline-primary" hx-get="{% url 'radius-logs' %}" hx-target="#randomWindow" role="button">
			<i class="fa fa-satellite-dish"></i> Radius Log </a>
	</div>
	<div class="btn-group mr-2" role="group" aria-label="NGiNX">
		<a class="btn btn-outline-primary" hx-get="{% url 'nginx-logs' %}" hx-target="#randomWindow" role="button">
			<i class="fa fa-server"></i> NGiNX Log </a>
	</div>
	<div class="btn-group mr-2" role="group" aria-label="MySQL">
		<a class="btn btn-outline-primary" hx-get="{% url 'mysql-logs' %}" hx-target="#randomWindow" role="button">
			<i class="fa fa-database"></i> MySQL Log </a>
	</div>
	<div class="btn-group" role="group" aria-label="Server">
		<a class="btn btn-outline-primary" hx-get="{% url 'server-logs' %}" hx-target="#randomWindow" role="button">
			<i class="fa fa-server"></i> Server Log </a>
	</div>
</div>