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
          <!-- if breadcrumb is single--><span>Users</span>
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
            <div class="card-header">Users Table</div>
            <table class="table border mb-0">
              <thead class="table-light fw-semibold">
                <tr class="align-middle">
                  <th class="text-center">
                    <svg class="icon">
                      <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-people">
                      </use>
                    </svg>
                  </th>
                  {{-- <th>Image</th> --}}
                  <th>Name</th>
                  <th>Email</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr class="align-middle">
                    <td class="text-center"><img src="/user_image/{{ $user->image }}" width="60px"></td>
                    {{-- <td><img src="{{ asset($user->image) }}" alt=""></td> --}}
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <svg class="icon">
                            <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-options">
                            </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            <a class="dropdown-item" href="">Show</a>
                            <a class="dropdown-item" href="{{ url('admin/user/edit', $user->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="dropdown-item text-danger">Delete</button>
                          </form>
                          {{-- <a class="dropdown-item" href="#">Info</a><a
                            class="dropdown-item" href="{{ url('admin.user.edit') }}">Edit</a>
                          <form method="post" action="{{ url('admin.user.destroy', $user->id) }}">
                            {{ method_field('DELETE') }} @csrf
                            <input class="dropdown-item text-danger" type="submit" value="Delete">
                          </form> --}}
                          {{-- <a class="dropdown-item text-danger"
                                                    href="">Delete</a></div> --}}
                        </div>
                    </td>
                    {{-- <td class="text-center">
                                        <div class="avatar avatar-md"><img class="avatar-img"
                                                src="/back_assets/assets/img/avatars/1.jpg" alt="user@email.com"><span
                                                class="avatar-status bg-success"></span></div>
                                    </td>
                                    <td>
                                        <div>Yiorgos Avraamu</div>
                                        <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="icon icon-xl">
                                            <use xlink:href="/back_assets/vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-start">
                                                <div class="fw-semibold">50%</div>
                                            </div>
                                            <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul
                                                    10,
                                                    2020</small></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <svg class="icon icon-xl">
                                            <use
                                                xlink:href="/back_assets/vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard">
                                            </use>
                                        </svg>
                                    </td>
                                    <td>
                                        <div class="small text-medium-emphasis">Last login</div>
                                        <div class="fw-semibold">10 sec ago</div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-transparent p-0" type="button"
                                                data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-options">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                    href="#">Info</a><a class="dropdown-item"
                                                    href="#">Edit</a><a class="dropdown-item text-danger"
                                                    href="#">Delete</a></div>
                                        </div>
                                    </td> --}}
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{-- {!! $user->links() !!} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
