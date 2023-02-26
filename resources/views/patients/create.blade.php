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
                                Hospital  Number
                                <input type="text" name="hospital_no" readonly value="HRN-{{ $hospital_no }}" class="form-control">
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
                                <select name="religion_id" id="" class="form-control">
                                    <option value=""></option>
                                    @foreach ($religions as $religion)
                                    <option value="{{ $religion->id }}">
                                        {{ $religion->name }}</option>
                                @endforeach
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
                                <select name="state_of_residence" id="state_of_residence" class="form-control">
                                    <option selected value="">State of Residence...
                                    </option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}">
                                            {{ $state }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                LGA
                                <select name="lga_of_residence" id="lga_of_residence" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                Residential Address
                                <textarea name="residential_address" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
        
                            <div class="form-group col-md-6">
                                State of Origin
                                <select name="state_of_origin" id="state_of_origin" class="form-control">
                                    <option selected value="">State of Origin...
                                    </option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}">
                                            {{ $state }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                LGA
                                <select name="lga_of_origin" id="lga_of_origin" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                Next of Kin's Name
                                <input type="text" name="next_of_kin_name" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                Next of Relationship
                               <select name="next_of_kin_relation" id="" class="form-control">
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Husband</option>
                                <option>Wife</option>
                                <option>Son</option>
                                <option>Daughter</option>
                                <option>Other</option>
                               </select>
                            </div>
                            <div class="form-group col-md-4">
                                Next of Kin's Phone
                                <input type="text" name="next_of_kin_phone" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                Next of Kin's Address
                                <textarea name="next_of_kin_address" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                Phone Number
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <hr>
                            <div class="form-group col-md-4">
                               Hmo Plan
                               <select name="hmo_id" id="" class="form-control"></select>
                            </div>
                            <div class="form-group col-md-4">
                                Dependent?
                                <select name="dependent" id="" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                             </div>
                             <div class="form-group col-md-4">
                                Principal ID
                               <input type="text" name="principal_id" class="form-control">
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
    <script>
        var state_residence = document.querySelector('#state_of_residence');
        var lga_residence = document.querySelector('#lga_of_residence');

        lga_residence.length = 0;

        let defaultOption = document.createElement('option');
        defaultOption.text = 'Choose LGA';

        lga_residence.add(defaultOption);
        lga_residence.selectedIndex = 0;

        state_residence.addEventListener("change", function() {
            // alert(state_residence.value);

            fetch('/getLGA/' + state_residence.value)
                .then((res) => res.json())
                .then((data) => {
                    console.log(data)
					document.getElementById("lga_of_residence").innerHTML = "";
                    let option;
                    for (let i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.text = data[i];
                        option.value = data[i];
                        lga_residence.add(option);
                    }

                });
        })

        var state_origin = document.querySelector('#state_of_origin');
        var lga_origin = document.querySelector('#lga_of_origin');

        lga_origin.length = 0;

        let defaultOption1 = document.createElement('option');
        defaultOption1.text = 'Choose LGA';

        lga_origin.add(defaultOption1);
        lga_origin.selectedIndex = 0;

        state_origin.addEventListener("change", function() {
            // alert(state_origin.value);

            fetch('/getLGA/' + state_origin.value)
                .then((res) => res.json())
                .then((data) => {
                    console.log(data)
					document.getElementById("lga_of_origin").innerHTML = "";
                    let option;
                    for (let i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.text = data[i];
                        option.value = data[i];
                        lga_origin.add(option);
                    }

                });
        })
    </script>
    <!-- /.content-wrapper -->
@endsection
