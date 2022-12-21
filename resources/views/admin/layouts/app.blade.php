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
        @include('admin.layouts.header')
        @include('admin.layouts.right-sidebar')
        @include('admin.layouts.left-sidebar')
        <div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Dashboard</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										Dashboard
									</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a
									class="btn btn-primary dropdown-toggle"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix progress-box">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial1"
									value="80"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#1b00ff"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
								<span class="d-block"
									>80% Average <i class="fa fa-line-chart text-blue"></i
								></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial2"
									value="70"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#00e091"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-light-green padding-top-10 h5">
									Business Captured
								</h5>
								<span class="d-block"
									>75% Average <i class="fa text-light-green fa-line-chart"></i
								></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial3"
									value="90"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#f56767"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-light-orange padding-top-10 h5">
									Projects Speed
								</h5>
								<span class="d-block"
									>90% Average <i class="fa text-light-orange fa-line-chart"></i
								></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input
									type="text"
									class="knob dial4"
									value="65"
									data-width="120"
									data-height="120"
									data-linecap="round"
									data-thickness="0.12"
									data-bgColor="#fff"
									data-fgColor="#a683eb"
									data-angleOffset="180"
									readonly
								/>
								<h5 class="text-light-purple padding-top-10 h5">
									Panding Orders
								</h5>
								<span class="d-block"
									>65% Average <i class="fa text-light-purple fa-line-chart"></i
								></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 pt-10 height-100-p">
							<h2 class="mb-30 h4">Browser Visit</h2>
							<div class="browser-visits">
								<ul>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="vendors/images/chrome.png" alt="" />
										</div>
										<div class="browser-name">Google Chrome</div>
										<div class="visit">
											<span class="badge badge-pill badge-primary">50%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="{{ asset('images/firefox.png') }}" alt="" />
										</div>
										<div class="browser-name">Mozilla Firefox</div>
										<div class="visit">
											<span class="badge badge-pill badge-secondary">40%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="{{ asset('images/safari.png') }}" alt="" />
										</div>
										<div class="browser-name">Safari</div>
										<div class="visit">
											<span class="badge badge-pill badge-success">40%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="{{ asset('images/edge.png') }}" alt="" />
										</div>
										<div class="browser-name">Microsoft Edge</div>
										<div class="visit">
											<span class="badge badge-pill badge-warning">20%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="{{ asset('images/opera.png') }}" alt="" />
										</div>
										<div class="browser-name">Opera Mini</div>
										<div class="visit">
											<span class="badge badge-pill badge-info">20%</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 pt-10 height-100-p">
							<h2 class="mb-30 h4">World Map</h2>
							<div
								id="browservisit"
								style="width: 100% !important; height: 380px"
							></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7 col-md-12 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<h4 class="mb-30 h4">Compliance Trend</h4>
							<div id="compliance-trend" class="compliance-trend"></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<h4 class="mb-30 h4">Records</h4>
							<div id="chart" class="chart"></div>
						</div>
					</div>
				</div>
				@include('admin.layouts.footer')
			</div>
		</div>
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
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
