<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pages / Login - Admin Bootstrap Template</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('template/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/simple-datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4"> <a href="index.html"
                                    class="logo d-flex align-items-center w-auto"> <img src="assets/img/logo.png"
                                        alt=""> </a></div>
                            @if (session()->has('logError'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('logError') }}
                                </div>
                            @endif
                            <div class="card mb-3">

                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>
                                    <form class="row g-3 needs-validation" form="login" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input
                                                    @error('email')
                                                        is-invalid
                                                    @enderror
                                                    value="{{ old('email') }}" type="email" name="email"
                                                    class="form-control" required>
                                                <div class="invalid-feedback">Email.</div>
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label> <input
                                                type="password" name="password" class="form-control" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12"> <button class="btn btn-primary w-100"
                                                type="submit">Login</button></div>
                                        <div class="col-12">
                                            <p class="small mb-0">Don't have account? <a
                                                    href="pages-register.html">Create an account</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="credits"> Hendri Wahyu Perdana </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('template/assets/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/echarts.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/quill.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/simple-datatables.js') }}"></script>
    <script src="{{ asset('template/assets/js/tinymce.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/validate.js') }}"></script>
    <script src="{{ asset('template/assets/js/main.js') }}"></script>
</body>

</html>
