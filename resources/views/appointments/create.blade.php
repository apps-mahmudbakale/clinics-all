@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Appointments</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.users.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">Request for Appointment</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- New User form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Request For Appointment</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{route('app.appointments.store')}}" method="POST">
                        @csrf
                        <!-- form start -->
                        <div class="card-body">
                          <div class="form-group">
                            Date
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            Clinic
                            <select name="clinic" id="" class="form-control">
                                    <option>GENERAL CONSULTATION</option>
                                    <option>ENT</option>
                                    <option>GYNAECOLOGY</option>
                            </select>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
