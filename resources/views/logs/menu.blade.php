@extends('base')
@section('randomWindow')
<div id="randomWindow" class="random-window d-flex justify-content-center align-items-center">
    <div id="zoomIn" class="menu-window base-bg d-flex flex-column">
        <!-- window close button -->
        <div class="d-flex justify-content-end theme-border">
            <form action="{{route('dashboard')}}" method="POST">
                @csrf
                <button class="p-1 bg-transparent border-0" hx-get="" hx-target="body" hx-swap="outerHTML transition:true" hx-push-url="true">
                    <i id="raw-close" class="close-icon fas fa-times text-danger"></i>
                </button>
            </form>
        </div>

        <div class="d-flex justify-content-around align-items-center vh-100 icon-window flex-wrap">
            <div class="col-auto text-center" hx-get="{% url 'radius-logs' %}" hx-push-url="true" hx-target="#randomWindow">
                <a href="{{ route('radiuslog') }}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">                   
                    <i class="icon fa-thin fa-satellite-dish"></i>
                    <p>Radius Logs</p>
                </a>
            </div>
            <div class="col-auto text-center" hx-get="{% url 'mysql-logs' %}" hx-push-url="true" hx-target="#randomWindow">
                <a href="{{ route('mysqllog') }}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                    <i class="icon fa-thin fa-database"></i>
                    <p>MySQL Logs</p>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-around align-items-center vh-100 icon-window flex-wrap">
            <div class="col-auto text-center" hx-get="{% url 'nginx-logs' %}" hx-push-url="true" hx-target="#randomWindow">
                <a href="{{ route('nginxlog') }}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                    <i class="icon fa-thin fa-server"></i>
                    <p>NGiNX Logs</p>
                </a>
            </div>
            <div class="col-auto text-center" hx-get="{% url 'server-logs' %}" hx-push-url="true" hx-target="#randomWindow">
                <a href="{{ route('serverlog') }}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                    <i class="icon fa-thin fa-network-wired"></i>
                    <p>Server Logs</p>
                </a>
            </div>
        </div>
    </div>
    @endsection