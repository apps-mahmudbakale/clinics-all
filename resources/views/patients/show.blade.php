@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Patients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('app.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Patients</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
  
              <!-- Profile Image -->
              <div class="card card-success card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    @if($patient->gender == 'Male')
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('user-male-circle.png') }}" alt="User profile picture">
                    @elseif ($patient->gender == 'Female')
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('user-male-circle.png') }}" alt="User profile picture">
                    @endif
                  </div>
  
                  <h3 class="profile-username text-center">{{$patient->user->lastname.", ".$patient->middlename." ".$patient->user->firstname }} HRN{{ $patient->hospital_no }}</h3>
  
                  <p class="text-muted text-center"><span class="badge badge-info col-sm-2">{{ $patient->gender }}</span><span class="col-sm-2">&nbsp;</span><span class="badge badge-info col-sm-2">{{$patient->getAge() }}</span></p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#visits" data-toggle="tab">Visits</a></li>
                    <li class="nav-item"><a class="nav-link" href="#vital_signs" data-toggle="tab">Vital Signs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#diagnosis" data-toggle="tab">Diagnoses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#diagnosis" data-toggle="tab">Lab Requests</a></li>
                    <li class="nav-item"><a class="nav-link" href="#diagnosis" data-toggle="tab">Diagnoses</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="visits">

                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="vital_signs">
                      <!-- The timeline -->
                     
                    </div>
                    <!-- /.tab-pane -->
  
                    <div class="tab-pane" id="diagnosis">

                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
  </div>
@endsection
