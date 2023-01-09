@extends('admin.layouts.app')
@section('contain')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Simple Datatable start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">List User</h4>
                    </div>
                    <div class="pull-right">
                        <a href="javascript:;" class="fill_data btn btn-primary" data-url="{!! route('users.create') !!}" data-method="get">
                            New User
                        </a>
                    </div>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap" id="UserTable">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->
        </div>
    </div>
</div>
@endsection
