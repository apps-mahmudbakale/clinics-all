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
                  <a href="" class="float-right">..</a>
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
                    <li class="nav-item"><a class="nav-link" href="#lab" data-toggle="tab">Lab Requests</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#drugs" data-toggle="tab">Drugs Prescription</a></li>
                    <li class="nav-item"><a class="nav-link" href="#imaging" data-toggle="tab">Imaging</a></li>
                    <li class="nav-item"><a class="nav-link" href="#procedures" data-toggle="tab">Procedures</a></li>
                    <li class="nav-item"><a class="nav-link" href="#documents" data-toggle="tab">Documents</a></li>
                    <li class="nav-item"><a class="nav-link" href="#bills" data-toggle="tab">Bills</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="visits">
                      <h2>Visits</h2>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="vital_signs">
                      <!-- The timeline -->
                     <h2>Vitals</h2>
                    </div>
                    <!-- /.tab-pane -->
  
                    <div class="tab-pane" id="diagnosis">
                      <h2>Diagnoses</h2>
                    </div>
                    <div class="tab-pane" id="lab">
                      <h2>Lab</h2>
                    </div>
                    <div class="tab-pane" id="drugs">
                      <h2>Drugs</h2>
                    </div>
                    <div class="tab-pane" id="imaging">
                      <h2>Imaging</h2>
                    </div>
                    <div class="tab-pane" id="procedures">
                      <h2>Procedures</h2>
                    </div>
                    <div class="tab-pane" id="documents">
                      <h2>Documents</h2>
                    </div>
                    <div class="tab-pane" id="bills">
                      <h2>Bills</h2>
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
