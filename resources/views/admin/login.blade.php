<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Real Estate</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('images/apple-touch-icon.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('images/favicon-32x32.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('images/favicon-16x16.png') }}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('styles/core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('styles/icon-font.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}" />
	</head>
    @include('admin.shared.loader')
    <body class="login-page">
        <div class="login-header box-shadow">
            <div
                class="container-fluid d-flex justify-content-between align-items-center"
            >
                <div class="brand-logo">
                    <a href="#">
                        <img src="{{ asset('images/deskapp-logo.svg') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <div
            class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <img src="{{ asset('images/login-page-img.png') }}" alt="" />
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Login To Admin</h2>
                            </div>
                            <form>
                                <div class="input-group custom">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        placeholder="Username"
                                    />
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="icon-copy dw dw-user1"></i
                                        ></span>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <input
                                        type="password"
                                        class="form-control form-control-lg"
                                        placeholder="**********"
                                    />
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="dw dw-padlock1"></i
                                        ></span>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="customCheck1"
                                            />
                                            <label class="custom-control-label" for="customCheck1"
                                                >Remember</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="forgot-password">
                                            <a href="{{ route('forgot-password') }}">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <!--
                                            use code for form submit
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                        -->
                                            <a
                                                class="btn btn-primary btn-lg btn-block"
                                                href="{{ route('dashboard') }}"
                                                >Sign In</a
                                            >
                                        </div>
                                        <div
                                            class="font-16 weight-600 pt-10 pb-10 text-center"
                                            data-color="#707373"
                                        >
                                            OR
                                        </div>
                                        <div class="input-group mb-0">
                                            <a
                                                class="btn btn-outline-primary btn-lg btn-block"
                                                href="{{ route('register') }}"
                                                >Register To Create Account</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- js -->
        <script src="{{ asset('scripts/core.js') }}"></script>
        <script src="{{ asset('scripts/script.min.js') }}"></script>
        <script src="{{ asset('scripts/process.js') }}"></script>
        <script src="{{ asset('scripts/layout-settings.js') }}"></script>
    </body>
</html>
