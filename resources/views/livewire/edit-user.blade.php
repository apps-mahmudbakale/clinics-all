<div>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <!-- form start -->
        <div class="card-body">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" value="" class="form-control" placeholder="Name" id="fullname">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" value="" class="form-control" placeholder="Name" id="fullname">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" value="" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label>Role</label>
                <select name="role_id" class="form-control">
                   
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
