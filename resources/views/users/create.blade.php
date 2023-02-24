@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.users.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">Create User</li>
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
                        <h3 class="card-title">Create User</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{route('app.users.store')}}" method="POST">
                        @csrf
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname"  class="form-control" placeholder="Name" id="First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname"  class="form-control" placeholder="Name" id="Last Name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email"  class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone"  class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password"  class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role_id" class="form-control">
                                    @foreach ($roles as $role)
                                        <option value='{{ $role->id }}'>{{ $role->name }}</option>
                                    @endforeach
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
