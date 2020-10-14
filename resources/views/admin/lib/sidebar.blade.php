<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/admin/brand/coreui.svg')}}#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/admin/brand/coreui.svg')}}#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.dashboard') }}">
                <svg class="c-sidebar-nav-icon">
                    <use
                        xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg')}}#cil-speedometer"></use>
                </svg>
                Dashboard</a></li>


        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg')}}#cil-puzzle"></use>
                </svg>
                Service Type</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.service-type.index') }}"><span
                            class="c-sidebar-nav-icon"></span> Service Type List</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.service-type.create') }}"><span
                            class="c-sidebar-nav-icon"></span> Add Service Type</a></li>

            </ul>
        </li>
        <li class="c-sidebar-nav-divider"></li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
