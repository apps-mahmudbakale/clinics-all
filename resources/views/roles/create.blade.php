@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-xl">
  <!-- Page title -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Create Role</h3>
    </div>
    <div class="card-body border-bottom py-3">
        <form action="{{ route('app.roles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                Role
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                Permissions
                @foreach ($permissions as $permission)
                <div class="custom-control custom-switch">
                    <input type="checkbox" name="permissions[]" value="{{$$permission->id}}" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">{{ $$permission->name }}</label>
                  </div>
                  @endforeach
                {{-- <select name="permissions[]" id="" class="form-control" multiple>
                    @foreach ($permissions as $key => $permission)
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    @endforeach
                </select> --}}
            </div>
    </div>
    <div class="card-footer d-flex align-items-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
  </div>
</div>
@endsection
