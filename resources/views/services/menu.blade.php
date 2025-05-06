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
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-wrap">
                <div class="text-center" hx-get="{% url 'radius-restart' %}" hx-target="#randomWindow" _="on htmx:confirm(issueRequest) halt the event call Swal.fire({title: 'Are you sure?',
                    html: 'Input <code><i><b>\'radius\'</b></i></code> to Restart Radius Service?',
                    input: 'text',
                    inputAttributes: {
                      autocapitalize: 'off'
                    },
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Restart it!'
                    })
                    if result.isConfirmed issueRequest()">
                    <i class="icon fa-thin fa-power-off"></i>
                    <p>Radius Restart</p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-wrap">
                <div class="text-center" hx-get="{% url 'mysql-restart' %}" hx-target="#randomWindow" _="on htmx:confirm(issueRequest) halt the event call Swal.fire({title: 'Are you sure?',
                    html: 'Input <code><i><b>\'mysql\'</b></i></code> to Restart MySQL DB Service?',
                    input: 'text',
                    inputAttributes: {
                      autocapitalize: 'off'
                    },
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Restart it!'
                    })
                    if result.isConfirmed issueRequest()">
                    <i class="icon fa-thin fa-database"></i>
                    <p>MySQL Restart</p>
                </div>
            </div>
<!--        </div>-->
<!--        <div class="d-flex justify-content-around align-items-center vh-100 icon-window">-->
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-wrap">
                <div class="text-center" hx-get="{% url 'nginx-restart' %}" hx-target="#randomWindow" _="on htmx:confirm(issueRequest) halt the event call Swal.fire({title: 'Are you sure?',
                    html: 'Input <code><i><b>\'nginx\'</b></i></code> to Restart NGiNX Web Service?',
                    input: 'text',
                    inputAttributes: {
                      autocapitalize: 'off'
                    },
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Restart it!'
                    })
                    if result.isConfirmed issueRequest()">
                    <i class="icon fa-thin fa-server"></i>
                    <p>NGiNX Restart</p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-wrap">
                <div class="text-center" hx-get="{% url 'server-restart' %}" hx-target="#randomWindow" _="on htmx:confirm(issueRequest) halt the event call Swal.fire({title: 'Are you sure?',
                    html: 'Input <code><i><b>\'server\'</b></i></code> to Restart the Main Server?',
                    input: 'text',
                    inputAttributes: {
                      autocapitalize: 'off'
                    },
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Restart it!'
                    })
                    if result.isConfirmed issueRequest()">
                    <i class="icon fa-thin fa-server"></i>
                    <p>Server Restart</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
