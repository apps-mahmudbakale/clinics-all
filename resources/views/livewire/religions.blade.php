<div>
    <div id="users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="users_length"><label>Show <select wire:model="perPage"
                            aria-controls="documents"
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries</label></div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="users_filter" class="dataTables_filter"><label>Search:<input type="search"
                            class="form-control form-control-sm" wire:model.debounce.300ms='search' placeholder=""
                            aria-controls="documents"></label></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="documents" class="table table-striped dataTable no-footer"
                    role="grid" aria-describedby="users_info">
                    <thead>
                        <tr role="row">
                            <th>S/N</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($religions as $religion)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$religion->name}}</td>
                            <td class="text-right">
                                <span class="dropdown ml-1">
                                    <button class="btn btn-default btn-sm dropdown-toggle align-text-top"
                                        data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="" wire:click.prevent="selectReligion({{ $religion->id }})">
                                            Edit
                                        </a>
                                        <button class="dropdown-item" id="del{{ $religion->id }}" data-value="{{ $religion->id }}">
                                            Delete
                                        </button>
                                    </div>
                                </span>
                                <script>
                                    religion.querySelector('#del{{ $religion->id }}').addEventListener('click', function(e) {
                                        // alert(this.getAttribute('data-value'));
                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                document.getElementById('del#'+this.getAttribute('data-value')).submit();
                                                // Swal.fire(
                                                //     'Deleted!',
                                                //     'Your file has been deleted.',
                                                //     'success'
                                                // )
                                            }
                                        })
                                    })
                                </script>
                                <form id="del#{{ $religion->id }}"
                                    action="{{ route('app.religions.destroy', $religion->id) }}" method="POST"
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
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="users_info" role="status" aria-live="polite">Showing <b>{{ $religions->firstItem() }}</b> to
                    <b>{{ $religions->lastItem() }}</b> out of <b>{{ $religions->total() }}</b> entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="users_paginate">
                    {{ $religions->links() }}
                </div>
            </div>
        </div>
    </div>
    @push('body-scripts')
    @once
    window.addEventListener('ReligionEditModal', function() {
        $('#edit-religion-modal').modal('show');
    });
    @endonce
@endpush
@include('religions.modals.new')
@include('religions.modals.edit')
</div>

