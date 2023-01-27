@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xl">
        <p></p>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Patient</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <form action="{{ route('app.users.store') }}" method="POST" class="row">
                    @csrf
                    <div class="form-group">
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

                    <div class="form-group col-md-6">
                        State of Residence
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
            </div>
            <div class="card-footer d-flex align-items-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
@endsection
