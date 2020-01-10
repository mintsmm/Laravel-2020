@extends('layouts.admin')

@section('content')
    <div class="laravel-admin-dashboard-stats-container">
        <div class="row">
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Users</span>
                        <span class="info-box-number">12</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-thumb-tack"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Posts</span>
                        <span class="info-box-number">2</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-comment"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Comments</span>
                        <span class="info-box-number">1</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>
    </div>
@endsection
