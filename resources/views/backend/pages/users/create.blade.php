@extends('backend.layouts.app')
@section('title', 'Users')
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
                    <span>Users</span>
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
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">Add User Form</div>

                        <div class="card-body">
                            <form method="post" action="{{url('admin/user')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3"><span class="input-group-text">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-user">
                                                    </use>
                                                </svg></span>
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3"><span class="input-group-text">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open">
                                                    </use>
                                                </svg></span>
                                            <input class="form-control" type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3"><span class="input-group-text">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
                                                    </use>
                                                </svg></span>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="input-group mb-4"><span class="input-group-text">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked">
                                                    </use>
                                                </svg></span>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Repeat password">
                                        </div>
                                    </div> --}}
                                    <div class="input-group mb-4">
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-success px-4" type="submit">Create User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
