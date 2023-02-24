<div wire:ignore.self class="modal fade" id="edit-plan-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Document</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateDoc">
                    <div class="form-group">
                        HMO Group
                        <select wire:model="hmo_id" name="hmo_id" id="" class="form-control">
                            @foreach ($hmos as $hmo)
                                <option value="{{$hmo->id}}">{{$hmo->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        Enrollment mount
                        <input type="number" wire:model="enrollment_amount" name="enrollment_amount" class="form-control">
                        <span>How much to charge the HMO Company for each patient that signs up to receive care here</span>
                        
                    </div>

                    <div class="form-group">
                        SignUp amount
                        <input type="number" wire:model="signup_amount" name="signup_amount" class="form-control">
                        <span>How much to charge HMO Company for partnering with us</span>
                    </div>
                    <div class="form-group">
                        Maximum number of beneficiaries
                        <input type="number" name="max_no" wire:model="max_no" class="form-control">
                        <span>This is used as check while enrolling a patient to a plan</span>
                        
                    </div>
                    <div class="form-group">
                        Logo for Insurance report and Document
                        <input type="file" name="logo" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input class="" value="1" type="checkbox" wire:model="is_insurance" name="is_insurance" id="customCheckbox">
                        <span>Is Insurance</span>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn bg-gradient-primary">Save</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>