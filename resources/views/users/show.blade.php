@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <p></p>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Show - {{ strtoupper($user->FullName()) }}</h3>
                <a href="{{route('app.users.index')}}" class="btn btn-primary ml-auto">Back</a>
            </div>
            <div class="card-body border-bottom py-3">
                <table class="table table-bordered">
                    <tr class="success">
                        <td><strong>Name</strong></th>
                        <td>{{ $user->FullName() }}</td>
                    </tr>
                    <tr class="success">
                        <td><strong>Email</strong></th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    {{-- <tr class="success">
                        <td><strong>Role</strong></th>
                        <td>{{ $user->role }}</td>
                    </tr> --}}
                </table>
            </div>
        </div>
    </div>
@endsection
