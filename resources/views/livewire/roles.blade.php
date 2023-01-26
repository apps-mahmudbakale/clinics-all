<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Roles</h3>
            <a href="{{ route('app.roles.create') }}" class="btn btn-primary ml-auto">Create Role</a>
        </div>
        <div class="card-body border-bottom py-3">
            <div class="d-flex">
                <div class="text-muted">
                    Show
                    <div class="mx-2 d-inline-block">
                        <input type="number" wire:model="perPage" class="form-control" value="8" size="3">
                    </div>
                    entries
                </div>
                <div class="ml-auto text-muted">
                    Search:
                    <div class="ml-2 d-inline-block">
                        <input type="text" wire:model.debounce.300ms="search" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        <th class="w-1"># <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <polyline points="6 15 12 9 18 15" />
                            </svg>
                        </th>
                        <th>Name <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <polyline points="7 8 3 12 7 16" />
                                <polyline points="17 8 21 12 17 16" />
                                <line x1="14" y1="4" x2="10" y2="20" />
                            </svg>
                        </th>
                        <th>Created At <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <polyline points="7 8 3 12 7 16" />
                                <polyline points="17 8 21 12 17 16" />
                                <line x1="14" y1="4" x2="10" y2="20" />
                            </svg>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($roles as $role)
                            <td><span class="text-muted">{{ $loop->iteration }}</span></td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->created_at->diffForHumans() }}</td>
                            <td class="text-right">
                                <span class="dropdown ml-1">
                                    <button class="btn btn-white btn-sm dropdown-toggle align-text-top"
                                        data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('app.roles.show', $role->id) }}">
                                            Show
                                        </a>
                                        <a class="dropdown-item" href="{{ route('app.roles.edit', $role->id) }}">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href=""
                                            onclick="event.preventDefault(); document.getElementById('del#{{ $role->id }}').submit();">
                                            Delete
                                        </a>
                                    </div>
                                </span>
                                <form id="del#{{ $role->id }}" action="{{ route('app.roles.destroy', $role->id) }}"
                                    method="POST" onsubmit="return confirm('Are you sure');"
                                    style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-muted">Showing <span>{{ $roles->firstItem() }}</span> to
                <span>{{ $roles->lastItem() }}</span> of <span>{{ $roles->total() }}</span> entries</p>
            <div class="ml-auto">
                {{ $roles->links() }}
            </div>
        </div>
    </div>
</div>
