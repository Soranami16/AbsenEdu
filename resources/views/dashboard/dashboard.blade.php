@extends('template.dashboard')

@section('content')
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-info
                      ">
                            <i data-feather="user" class="fill-white feather-lg"></i>
                        </div>
                        <div class="ms-2 align-self-center">
                            <h3 class="mb-0">??</h3>
                            <h6 class="text-muted mb-0">Total User</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-warning
                      ">
                            <i data-feather="edit" class="fill-white feather-lg"></i>
                        </div>
                        <div class="ms-2 align-self-center">
                            <h3 class="mb-0">??</h3>
                            <h6 class="text-muted mb-0">Form accepted</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="
                        round round-lg
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        rounded-circle
                        bg-danger
                      ">
                            <i data-feather="edit" class="fill-white feather-lg"></i>
                        </div>
                        <div class="ms-2 align-self-center">
                            <h3 class="mb-0">??</h3>
                            <h6 class="text-muted mb-0">Form Reject</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
@endsection