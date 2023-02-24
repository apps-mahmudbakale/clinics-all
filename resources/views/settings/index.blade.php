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
        <section class="content" style="font-size: 13px;">
            <div class="container-fluid">
                <div class="row">
                    <!--Start System Settings-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">System</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#modal-lg">View/Update</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p>Modify System Settings Here</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--End System Settings-->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Services</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-service-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                               <livewire:service-categories/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--Start Hmo Group Settings-->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">HMO Groups</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-hmo-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <livewire:hmo-groups/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--End Hmo Group Settings-->

                    <!-- Start Department Setting -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Departments</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-dept-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <livewire:department/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- End of Deparment Setting -->

                    <!-- Start Department Setting -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Documents</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-doc-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <livewire:document/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- End of Deparment Setting -->
                     <!-- Start Payment Methods Setting -->
                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Payment Methods</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-paymentMethod-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <livewire:payment-methods/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- End of Religions Setting -->
                     <!-- Start Payment Methods Setting -->
                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Religions</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-religion-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <livewire:religions/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- End of Religions Setting -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Job/Position</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-position-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <livewire:positions/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                     <!-- Start HMO Plans Setting -->
                     <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">HMO Plans</h3>
                                <button class="btn bg-gradient-secondary float-right" data-toggle="modal"
                                    data-target="#new-plan-modal">New</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <livewire:hmo-plans/>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- End of Deparment Setting -->

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @include('settings.settings-modal')
   
    <!-- /.modal -->
@endsection
