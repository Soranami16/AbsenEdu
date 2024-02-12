@extends('template.dashboard')

@section('content')

<div class="container-fluid">
    <!-- DataTables -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="float-left">
                    <h3 class="card-title">Master User</h3>
                </div>
                <div class="float-right">
                    <button class="btn btn-primary" onclick="$('#editModal').modal('show');">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>


        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered table-hover text-center" id="masterTablebody">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama User</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->namaRole}}</td>
                        <td>
                            <button class="btn mr-2" style="background-color: #6E98B8;" onclick="editRole('{{$user->idUser}}')"><i class=" fa fa-edit"></i></button>
                            <button class="btn" style="background-color: #F4B24E;" id="btn-delete-post" data-id="{{ $user->idUser }}"><i class=" fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $roles->links() !!}
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Role Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMasterRole">
                    @csrf
                    <input type="hidden" name="idRole" id="idRole">
                    <div class="card-body">
                        <label for="namaRole">Nama Role</label>
                        <input type="text" class="form-control" name="namaRole" id="namaRole" required>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Form-->
<!-- <div class="modal fade" id="MasterRoleModal" tabindex="-1" aria-labelledby="MasterRoleModal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="MasterRoleModal">Form Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMasterRole">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Role</label>
                                    <input type="text" class="form-control" name="namaRole" id="namaRole" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="submitmasterrole">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div> -->


<!-- Modal Form Edit -->
<!-- <div class="modal fade" id="masterRoleEditModal" tabindex="-1" aria-labelledby="masterRoleEditModal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="masterRoleEditModal">Edit Form User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMasterRoleEdit"  method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="idRole" id="idRole">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="namaRole" id="namaRole" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="submiteditMasterRole">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

@endsection


<!-- /.content -->