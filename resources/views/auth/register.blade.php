<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Haebot ERP - Register</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/core/libs.min.css" />


    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/hope-ui.min.css?v=2.0.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/custom.min.css?v=2.0.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/rtl.min.css" />


</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                    <img src="../../assets/images/auth/05.png" class="img-fluid gradient-main animated-scaleX"
                        alt="images">
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                                <div class="card-body">

                                    <a href="../../dashboard/index.html"
                                        class="navbar-brand d-flex align-items-center mb-3">
                                        <!--Logo start-->
                                        <!--logo End-->
                                        <h4 class="logo-title ms-3">Haebot</h4>
                                    </a>
                                    <h2 class="mb-2 text-center">Sign Up</h2>
                                    <p class="text-center">Buat akunmu.</p>

                                    <form method="POST" action="/register">

                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        id="nama" name="nama" value="{{ old('nama') }}">
                                                    @error('nama')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="username"
                                                        class="form-control @error('username') is-invalid @enderror"
                                                        id="username" name="username" value="{{ old('username') }}">
                                                    @error('username')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" name="email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="phone" class="form-label">No Telp</label>
                                                    <input type="text"
                                                        class="form-control @error('no_telp') is-invalid @enderror"
                                                        id="phone" name="no_telp" value="{{ old('no_telp') }}">
                                                    @error('no_telp')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" name="password">
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="confirm-password" class="form-label">Ulangi
                                                        Password</label>
                                                    <input type="text"
                                                        class="form-control @error('konfirm_password') is-invalid @enderror"
                                                        id="confirm-password" name="konfirm_password">
                                                    @error('konfirm_password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-center">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">Saya menyetujui
                                                        syarat dan ketentuan Haebot.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Sign Up</button>
                                        </div>

                                        <p class="mt-3 text-center">
                                            Sudah punya akun? <a href="{{ url('login') }}"
                                                class="text-underline">Login</a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-bg sign-bg-right">
                        <svg width="280" height="230" viewBox="0 0 421 359" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.05">
                                <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8" />
                                <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 149.47 319.328)" fill="#3A57E8" />
                                <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857"
                                    transform="rotate(45 203.936 99.543)" fill="#3A57E8" />
                                <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(45 204.316 -229.172)" fill="#3A57E8" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Library Bundle Script -->
    <script src="{{ asset('/') }}assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('/') }}assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('/') }}assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('/') }}assets/js/charts/vectore-chart.js"></script>
    <script src="{{ asset('/') }}assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('/') }}assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="{{ asset('/') }}assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="{{ asset('/') }}assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="{{ asset('/') }}assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="{{ asset('/') }}assets/js/hope-ui.js" defer></script>

</body>

</html>
