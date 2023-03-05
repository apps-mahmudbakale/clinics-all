<div>
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
                                @foreach($categories as $category)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td class="text-right">
                                    <a href="{{ route('app.tariffs.show', $category->id) }}" class="btn btn-secondary">View</a>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="users_info" role="status" aria-live="polite">Showing <b>{{ $categories->firstItem() }}</b> to
                        <b>{{ $categories->lastItem() }}</b> out of <b>{{ $categories->total() }}</b> entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="users_paginate">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
        @push('body-scripts')
        @once
        window.addEventListener('CategoryEditModal', function() {
            $('#edit-category-modal').modal('show');
        });
        @endonce
    @endpush
    @include('services.modals.new-category')
    @include('services.modals.edit-category')
    </div>
    
    
</div>
