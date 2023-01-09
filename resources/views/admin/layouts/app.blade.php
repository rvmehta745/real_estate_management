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
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}" />

	</head>
	<body>
        @include('admin.shared.loader')
        @include('admin.shared.header')
        @include('admin.shared.right-sidebar')
        @include('admin.shared.left-sidebar')
        <div class="mobile-menu-overlay"></div>

        @yield('contain')
				@include('admin.shared.footer')
			</div>
		</div>
		<!-- js -->
		<script src="{{ asset('scripts/core.js') }}"></script>
		<script src="{{ asset('scripts/script.min.js') }}"></script>
		<script src="{{ asset('scripts/process.js') }}"></script>
		<script src="{{ asset('scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
		<script src="{{ asset('plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
		<script src="{{ asset('plugins/highcharts-6.0.7/code/highcharts-more.js') }}"></script>
		<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
		<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
		<script src="{{ asset('scripts/dashboard2.js') }}"></script>
	</body>
</html>
