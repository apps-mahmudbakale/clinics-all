@extends('layouts.app')
@section('title', 'Create User')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Create Users</h4>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.dashboard') }}">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('app.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('app.users.index')}}">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Create User</h5>
                            </div>
                            <div class="card-block">
                                <form action="{{ route('app.users.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        Name
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Email
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Role
                                        <select name="roles[]" id="" class="form-control">
                                            @foreach ($roles as $key => $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        Password
                                        <input type="password" name="password" class="form-control">
                                    </div>
                            </div>
                            <div class="card-footer d-flex align-items-center">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
