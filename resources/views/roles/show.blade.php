@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Roles - {{ strtoupper($role->name) }}</h3>
                <a href="{{route('app.roles.index')}}" class="btn btn-primary ml-auto">Back</a>
            </div>
            <div class="card-body border-bottom py-3">
                <table class="table table-bordered">
                    <tr class="success">
                        <td><strong>Role Name</strong></th>
                        <td>{{ $role->name }}</td>
                    </tr>
                </table>
                <p></p>
                <fieldset>
                    <legend>Permissions</legend>
                    <hr>
                    @foreach ($role->permissions as $id => $permission)
                        <span class="badge bg-success">{{ $permission->name }}</span>
                    @endforeach
                </fieldset>
            </div>
        </div>
    </div>
@endsection
