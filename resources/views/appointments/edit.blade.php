
@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Roles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('app.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('app.roles.index')}}">Roles</a></li>
              <li class="breadcrumb-item active">Update Role</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
              <h3 class="card-title">Update Roles</h3>
          </div>
          <form action="{{route('app.roles.update', $role->id)}}" method="POST">
            @csrf
            @method('PUT')
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{old('name', isset($role) ? $role->name : '')}}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                  <div class="row">
                    @foreach ($permissions as $permission)
                    <div class="col-sm-2">
                        <input class="" type="checkbox" value="{{$permission->id}}" name="permissions[]" {{ (in_array($permission->id, old('permissions', [])) || isset($role) && $role->permissions->contains($permission->id)) ? 'checked' : '' }} id="customCheckbox">
                        <label>{{$permission->name}}</label>
                    </div>
                    @endforeach
                </div>
                  </div>
                    
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
      </div>
    </section>
  </div>
@endsection