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
<form>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">First Name</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" placeholder="Johnny Brown">
		</div>
	</div>
    <div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" placeholder="Johnny Brown">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Email</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="bootstrap@example.com" type="email">
		</div>
	</div>
    <div class="form-group row">
        <button type="button" class="btn btn-primary"><a href='{{ route('datatable') }}'>Submit</a></button>
    </div>
</form>
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
