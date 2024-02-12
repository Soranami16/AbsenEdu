@extends('template.dashboard')

@section('content')
<!-- basic table -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tickets</h4>
                <div class="row mt-4">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 rounded bg-light-primary text-center">
                                <h1 class="fw-light text-primary">??</h1>
                                <h6 class="text-primary">Total Tickets</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 rounded bg-light-warning text-center">
                                <h1 class="fw-light text-warning">??</h1>
                                <h6 class="text-warning">In Progress</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 rounded bg-light-success text-center">
                                <h1 class="fw-light text-success">??</h1>
                                <h6 class="text-success">Accepted</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 rounded bg-light-danger text-center">
                                <h1 class="fw-light text-danger">??</h1>
                                <h6 class="text-danger">Reject</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <div class="table-responsive mt-4">
                    <table id="listTableBody" class="table table-bordered no-wrap fs-3">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Title</th>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Created by</th>
                                <th>Date</th>
                                <th>Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="
                                badge
                                bg-light-warning
                                text-warning
                                font-weight-medium
                              ">In Progress</span>
                                </td>
                                <td>
                                    <a href="ticket-detail.html" class="font-weight-medium link">AdminX Theme Side Menu Open OnClick</a>
                                </td>
                                <td>
                                    <a href="ticket-detail.html" class="fw-bold link">1420530</a>
                                </td>
                                <td>AdminX Admin</td>
                                <td>Nirav Joshi</td>
                                <td>2021/10/01</td>
                                <td>Fazz</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Status</th>
                                <th>Title</th>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Created by</th>
                                <th>Date</th>
                                <th>Agent</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection