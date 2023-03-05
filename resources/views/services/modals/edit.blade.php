<div wire:ignore.self class="modal fade" id="edit-tariff-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update  Tariff</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateTariff">
                    <input type="hidden" name="category_id" wire:model.prevent="category_id">
                    <div class="form-group">
                        Name
                        <input type="text" name="name" wire:model.prevent="name"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        Deafult Price
                        <input type="number" name="price" wire:model.prevent="price"
                            class="form-control">
                    </div>
                    {{-- @if($category->name  == 'Pharmacy')
                    <div class="form-group">
                        Quantity
                        <input type="number" wire:model.prevent="qty"
                            class="form-control">
                    </div>
                    @else
                        
                    @endif --}}
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