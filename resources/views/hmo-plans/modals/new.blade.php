<div class="modal fade" id="new-plan-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New HMO Plan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('app.hmo-plans.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        HMO Group
                        <select name="hmo_id" id="" class="form-control">
                            @foreach ($hmos as $hmo)
                                <option value="{{$hmo->id}}">{{$hmo->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        Enrollment mount
                        <input type="number" name="enrollment_amount" class="form-control">
                        <span>How much to charge the HMO Company for each patient that signs up to receive care here</span>
                        
                    </div>

                    <div class="form-group">
                        SignUp amount
                        <input type="number" name="signup_amount" class="form-control">
                        <span>How much to charge HMO Company for partnering with us</span>
                    </div>
                    <div class="form-group">
                        Maximum number of beneficiaries
                        <input type="number" name="max_no" class="form-control">
                        <span>This is used as check while enrolling a patient to a plan</span>
                        
                    </div>
                    <div class="form-group">
                        Logo for Insurance report and Document
                        <input type="file" name="logo" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input class="" value="1" type="checkbox" name="is_insurance" id="customCheckbox">
                        <span>Is Insurance</span>
                    </div>
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