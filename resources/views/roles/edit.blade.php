@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-xl">
  <!-- Page title -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Create Role</h3>
      <a href="{{route('app.roles.index')}}" class="btn btn-primary ml-auto">Back</a>
    </div>
    <div class="card-body border-bottom py-3">
        <form action="{{ route('app.roles.update', [$role->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                Role
                <input type="text" name="name" value="{{ old('name', isset($role) ? $role->name : '') }}" class="form-control">
            </div>
            <div class="form-group">
                Permissions
                <select name="permissions[]" id="" class="form-control" multiple>
                    @foreach($permissions as $id => $permission)
                    <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>
                          {{ $permission }}
                    </option>
                @endforeach
                </select>
            </div>
    </div>
    <div class="card-footer d-flex align-items-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
  </div>
</div>
@endsection
