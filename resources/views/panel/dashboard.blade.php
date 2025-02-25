@extends('panel.layouts.app')
@section('title', 'STEPBRO LIBRARY MANAGEMENT SYSTEM')
@section('subtitle', 'Empowering Knowledge, Simplifying Access.')
@section('content')
<div class="row">
    <div class="col-xxl-4 col-xl-12 mb-4">
        <div class="card h-100">
            <div class="card-body h-100 p-5">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-xxl-12">
                        <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                            <h1 class="text-primary">Admin Panel</h1>
                            <p class="text-gray-700 mb-0">Stepbro Library Management System</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" style="width: 13rem; height:13rem;" src="{{ asset('assets/img/favicon.png') }}" style="max-width: 26rem" /></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Example Colored Cards for Dashboard Demo-->
<div class="row">
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Earnings (Monthly)</div>
                        <div class="text-lg fw-bold">$40,000</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="calendar"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Report</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-warning text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Earnings (Annual)</div>
                        <div class="text-lg fw-bold">$215,000</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Report</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Task Completion</div>
                        <div class="text-lg fw-bold">24</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="check-square"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Tasks</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-danger text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Pending Requests</div>
                        <div class="text-lg fw-bold">17</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Requests</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<!-- Example DataTable for Dashboard Demo-->



@endsection
