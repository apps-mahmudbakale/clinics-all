@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Settings</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">System</h3>
                  <button class="btn bg-gradient-secondary float-right" data-toggle="modal" data-target="#modal-lg">View/Update</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                 <p>Modify System Settings Here</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            
                    </div>
                    <!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">System Settings</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('app.update.system.settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        Clinic Name
                        <input type="text" name="clinic_name" value="{{ $system->clinic_name }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        Clinic Logo
                        <input type="file" name="logo" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        Clinic Logo
                        <input type="file" name="favicon" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        Address
                        <textarea class="form-control" rows="10" name="address">{{ $system->address }}</textarea>
                    </div>
                    <div class="form-group">
                        Footer
                        <input type="text" class="form-control"  name="footer" value="{{ $system->footer }}">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection
