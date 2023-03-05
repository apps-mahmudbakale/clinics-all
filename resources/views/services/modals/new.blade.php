<div class="modal fade" id="new-service-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New {{ $category->name }} Tariff</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>