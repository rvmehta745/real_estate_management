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
			href="{{ asset('plugins/datatables/css/dataTables.bootstrap4.min.css') }}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('plugins/datatables/css/responsive.bootstrap4.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}" />
	</head>
	<body>
        @include('admin.shared.loader')
        @include('admin.shared.header')
        @include('admin.shared.right-sidebar')
        @include('admin.shared.left-sidebar')
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					@include('admin.shared.main-container')
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">User Table Simple</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">No</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email Id</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">1</td>
										<td>Gloria</td>
                                        <td>Taddy</td>
										<td>gloria@yopmail.com</td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
                    <!-- Checkbox select Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">User Table with Checckbox select</h4>
						</div>
						<div class="pb-20">
							<table class="checkbox-datatable table nowrap">
								<thead>
									<tr>
										<th>
											<div class="dt-checkbox">
												<input
													type="checkbox"
													name="select_all"
													value="1"
													id="example-select-all"
												/>
												<span class="dt-checkbox-label"></span>
											</div>
										</th>
										<th>No</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email Id</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Tokyo@yopmail.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Checkbox select Datatable End -->
                    <!-- Export Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">User Table with Export Buttons</h4>
						</div>
						<div class="pb-20">
							<table
								class="table hover multiple-select-row data-table-export nowrap"
							>
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">No</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email Id</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">1</td>
										<td>Goloria</td>
										<td>Sagittarius</td>
										<td>gs@yopmail.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Export Datatable End -->
				</div>
				@include('admin.shared.footer')
			</div>
		</div>
		<!-- js -->
		<script src="{{ asset('scripts/core.js') }}"></script>
		<script src="{{ asset('scripts/script.min.js') }}"></script>
		<script src="{{ asset('scripts/process.js') }}"></script>
		<script src="{{ asset('scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
		<!-- buttons for Export datatable -->
		<script src="{{ asset('plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/buttons.print.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/buttons.html5.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/buttons.flash.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/pdfmake.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/js/vfs_fonts.js') }}"></script>
		<!-- Datatable Setting js -->
		<script src="{{ asset('scripts/datatable-setting.js') }}"></script>
	</body>
</html>
