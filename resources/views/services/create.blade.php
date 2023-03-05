@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New Tariffs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('app.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('app.settings.index')}}">Settings</a></li>
              <li class="breadcrumb-item active">Tariffs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tariffs</h3>
                    <a href="{{ route('app.tariffs.create') }}" class="btn btn-success float-right"><i
                            class="fa fa-plus-circle"></i> New</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('app.tariffs.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                        <div class="form-group">
                            Name
                            <input type="text" name="name"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            Deafult Price
                            <input type="number" name="price"
                                class="form-control">
                        </div>
                        @if($category->name  == 'Pharmacy')
                        <div class="form-group">
                            Quantity
                            <input type="number" name="qty"
                                class="form-control">
                        </div>
                        @else
                            
                        @endif
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
  </div>
@endsection
