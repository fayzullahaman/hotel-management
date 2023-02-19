<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex">
    {{-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo"> --}}
    {{-- <use xlink:href="/back_assets/assets/brand/coreui.svg#full"></use> --}}
    <img src="/back_assets/assets/brand/logo-2.png" alt="">
    {{-- </svg> --}}
    <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="/back_assets/assets/brand/coreui.svg#signet"></use>
    </svg>
  </div>
  <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboard') }}">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
        </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
    <li class="nav-title">Components</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Users</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/user') }}"><span class="nav-icon"></span>
            All Users</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/user/create') }}"><span class="nav-icon"></span>
            Create User</a></li>
      </ul>
    </li>
    {{-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
              <svg class="nav-icon">
                  <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
              </svg> Buttons</a>
          <ul class="nav-group-items">
              <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span>
                      Buttons</a></li>
              <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span>
                      Buttons Group</a></li>
              <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span
                          class="nav-icon"></span>
                      Dropdowns</a></li>
          </ul>
      </li> --}}
    {{-- <li class="nav-item"><a class="nav-link" href="charts.html">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
        </svg> Charts</a></li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
        </svg> Forms</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/form-control.html"> Form
            Control</a></li>
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/select.html"> Select</a></li>
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/checks-radios.html"> Checks and
            radios</a></li>
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/range.html"> Range</a></li>
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/input-group.html"> Input group</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/floating-labels.html"> Floating
            labels</a></li>
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/layout.html"> Layout</a></li>
        <li class="nav-item"><a class="nav-link" href="/back_assets/forms/validation.html"> Validation</a>
        </li>
      </ul>
    </li> --}}
    {{-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-star"></use>
        </svg> Icons</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span
              class="badge badge-sm bg-success ms-auto">Free</span></a></li>
        <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons -
            Brand</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a>
        </li>
      </ul>
    </li> --}}
    {{-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
        </svg> Notifications</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span>
            Alerts</a></li>
        <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span>
            Badge</a></li>
        <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span>
            Modals</a></li>
        <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span>
            Toasts</a></li>
      </ul>
    </li> --}}
    {{-- <li class="nav-item"><a class="nav-link" href="widgets.html">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
        </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li> --}}
    <li class="nav-divider"></li>
    <li class="nav-title">Extras</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-star"></use>
        </svg> Pages</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{ url('/admin/login') }}" target="_top">
            <svg class="nav-icon">
              {{-- <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use> --}}
            </svg> Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/admin/register') }}" target="_top">
            <svg class="nav-icon">
              {{-- <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use> --}}
            </svg> Register</a></li>
        {{-- <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
            <svg class="nav-icon">
              <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
            </svg> Error 404</a></li>
        <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
            <svg class="nav-icon">
              <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
            </svg> Error 500</a></li> --}}
      </ul>
    </li>
  </ul>
  <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
