<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <link rel="stylesheet" href="{{ asset('sidebar/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('sidebar/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('sidebar/compiled/css/auth.css') }}">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    {{-- <div class="auth-logo">
                <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo"></a>
            </div> --}}
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
                    @if (session('error'))
                        <div class="alert alert-light-warning color-warning"><i class="bi bi-exclamation-triangle"></i>
                            {{ session('error') }}</div>
                    @endif
                    <form action="login" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="email"
                                class="form-control form-control-xl @error('email') is-invalid @enderror"
                                placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                                @error('email')
                                    <p class="text-danger mt-3">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="password" type="password"
                                class="form-control form-control-xl @error('password')is-invalid @enderror"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <p class="text-danger mt-3">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                        </div> --}}
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
