<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Royal - Hotel Management">
    <meta name="author" content="Fayzullah Aman">
    <meta name="keyword" content="Bootstrap,Admin,Template,jQuery,CSS,HTML,RWD,Dashboard,Laravel8">
    <title>Royal Hotel Register</title>

    <!-- Vendors styles-->
    <link rel="stylesheet" href="/back_assets/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/back_assets/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="/back_assets/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div style="margin-left: 10%"><img src="/back_assets/assets/brand/login_logo.jpg" alt="">
                    </div>

                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1>Register</h1>
                                <p class="text-medium-emphasis">Create your account</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                                        </svg></span>
                                    <input class="form-control" :value="old('name')" name="name" type="text" placeholder="Username">
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-envelope-open">
                                            </use>
                                        </svg></span>
                                    <input class="form-control" name="email" :value="old('email')" type="email" placeholder="Email">
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="/back_assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" type="password" name="password_confirmation" placeholder="Repeat password">
                                </div>
                                <div class="input-group mb-4">
                                 <input class="form-control" type="file" name="image">
                               </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-success px-4" >Create Account</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="{{ url('/admin/login') }}" class="btn btn-info px-4"
                                            type="button">Login</a>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
