@extends('backend.layouts.app')
@section('title', 'Dashboard')
@push('styles')
  <link rel="apple-touch-icon" sizes="57x57" href="/back_assets/assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/back_assets/assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/back_assets/assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/back_assets/assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/back_assets/assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/back_assets/assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/back_assets/assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/back_assets/assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/back_assets/assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="/back_assets/image/png" sizes="192x192"
    href="/back_assets/assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="/back_assets/image/png" sizes="32x32" href="/back_assets/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="/back_assets/image/png" sizes="96x96" href="/back_assets/assets/favicon/favicon-96x96.png">
  <link rel="icon" type="/back_assets/image/png" sizes="16x16" href="/back_assets/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/back_assets/assets/favicon/manifest.json">
  <link rel="stylesheet" href="/back_assets/vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="/back_assets/css/vendors/simplebar.css">
  <!-- Main styles for this application-->
  <link href="/back_assets/css/style.css" rel="stylesheet">
  <!-- We use those styles to show code examples, you should remove them in your application.-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
  <link href="/back_assets/css/examples.css" rel="stylesheet">
  <link href="/back_assets/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
@endpush

@push('scripts')
  <!-- CoreUI and necessary plugins-->
  <script src="/back_assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="/back_assets/vendors/simplebar/js/simplebar.min.js"></script>
  <!-- Plugins and scripts required by this view-->
  <script src="/back_assets/vendors/chart.js/js/chart.min.js"></script>
  <script src="/back_assets/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
  <script src="/back_assets/vendors/@coreui/utils/js/coreui-utils.js"></script>
  <script src="/back_assets/js/main.js"></script>
@endpush

@section('breadcrumb')
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
          <!-- if breadcrumb is single--><span>Home</span>
        </li>
        <li class="breadcrumb-item active"><span>Dashboard</span></li>
      </ol>
    </nav>
  </div>
@endsection
@section('content')
  <div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-primary">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                    <svg class="icon">
                      <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                    </svg>)</span></div>
                <div>Users</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                    href="#">Something else here</a></div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart1" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-info">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
                    <svg class="icon">
                      <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                    </svg>)</span></div>
                <div>Income</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                    href="#">Something else here</a></div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart2" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-warning">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                    <svg class="icon">
                      <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                    </svg>)</span></div>
                <div>Conversion Rate</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                    href="#">Something else here</a></div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
              <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-3">
          <div class="card mb-4 text-white bg-danger">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                    <svg class="icon">
                      <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                    </svg>)</span></div>
                <div>Sessions</div>
              </div>
              <div class="dropdown">
                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                    href="#">Something else here</a></div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart4" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>            
    </div>
  </div>
@endsection
