<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('partial.header')
</head>

<body class="base-bg theme-blush">

    <div id="dashboardIcon" class="col-md-12 window-icon">
        <div class="icon-section">
            <div class="col mt-0 d-flex justify-content-start flex-wrap">
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{ route('usermenu') }}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-users"></i>
                        <p>Users</p>
                    </a>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('ticketsmenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-tickets-perforated"></i>
                    </a>
                    <p>Tickets</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('packagemenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-box-circle-check"></i>
                    </a>
                    <p>Packages</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('supportmenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-paper-plane"></i>
                    </a>
                    <p>Support</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('servicesmenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-screwdriver-wrench"></i>
                    </a>
                    <p>Services</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('managermenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-user-tie"></i>
                    </a>
                    <p>Managers</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('nasmenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-container-storage"></i>
                    </a>
                    <p>NAS</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a hx-get="{% url 'settings-menu' %}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-gears"></i>
                    </a>
                    <p>Setting</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('routermenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-router"></i>
                    </a>
                    <p>Routers</p>
                </div>
                <!-- Inventory menu start -->
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('reports')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-file-chart-column"></i>
                    </a>
                    <p>Reports</p>
                </div>
                <!-- Inventory menu end -->
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('expensemenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-hand-holding-circle-dollar"></i>
                    </a>
                    <p>Expense</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('inventorymenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-cart-flatbed-boxes"></i>
                    </a>
                    <p>Inventory</p>
                </div>
                <!-- Logs menu start -->
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a href="{{route('logmenu')}}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">
                        <i class="icon fa-thin fa-book-atlas"></i>
                    </a>
                    <p>Logs</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 text-center">
                    <a hx-get="{% url 'data-migration-menu' %}" hx-push-url="true" hx-target="#randomWindow" hx-swap="outerHTML transition:true">                       
                        <i class="icon fa-thin fa-arrow-right-arrow-left"></i>
                    </a>
                    <p>Data Migration</p>
                </div>
                <!-- Logs menu end -->
            </div>
        </div>

        <div class="col mt-4"></div>
    </div>
    @yield('randomWindow')
    @include('partial.script')
</body>

</html>