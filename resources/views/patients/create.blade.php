@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Patients</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('app.patients.index') }}">Patients</a></li>
                            <li class="breadcrumb-item active">Create Patient</li>
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
                        <h3 class="card-title">Create Patient</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('app.patients.store') }}" method="POST">
                        @csrf
                        <!-- form start -->
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                Folder Number
                                <input type="text" name="folder_no" readonly class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                First Name
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                Middle Name
                                <input type="text" name="middlename" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                Last Name
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                Email
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                Gender
                                <select name="gender" id="" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                Date of Birth
                                <input type="date" name="date_of_birth" class="form-control">
                            </div>
        
                            <div class="form-group col-md-4">
                                Religion
                                <select name="religion" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Traditionalist">Traditionalist</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                Marital Status
                                <select name="marital_status" id="" class="form-control">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                Occupation
                                <input type="text" name="occupation" class="form-control">
                            </div>
        
                            <div class="form-group col-md-4">
                                State of Residence
                                <select name="state_of_residence" id="" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                LGA
                                <select name="lga_of_residence" id="" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                Residential Address
                                <textarea name="residential_address" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
        
                            <div class="form-group col-md-6">
                                State of Origin
                                <select name="state_of_residence" id="" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                LGA
                                <select name="lga_of_residence" id="" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                Next of Kin's Name
                                <input type="text" name="nok_name" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                Next of Relationship
                               <select name="nok_relation" id="" class="form-control"></select>
                            </div>
                            <div class="form-group col-md-4">
                                Next of Kin's Phone
                                <input type="text" name="nok_phone" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                Next of Kin's Address
                                <textarea name="nok_address" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                Phone Number
                                <input type="text" name="nok_phone" class="form-control">
                            </div>
                            <hr>
                            <div class="form-group col-md-4">
                               Hmo Plan
                               <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="form-group col-md-4">
                                Dependent?
                                <select name="" id="" class="form-control">
                                    <option value="">Yes</option>
                                    <option value="">No</option>
                                </select>
                             </div>
                             <div class="form-group col-md-4">
                                Principal ID
                               <input type="text" class="form-control">
                             </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block">Save Patient</button>
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
