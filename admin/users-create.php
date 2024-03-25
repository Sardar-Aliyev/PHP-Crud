<?php include('includes/header.php')   ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add user
                    <a href="users.php" class="btn btn-primary float-end">Back</a>
                    <h4>
            </div>
            <div class="card-body">
                <?= alertMessage();  ?>
                
                <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Phone No.</label>
                                <input type="text" name="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Select Role</label>
                                <select name="role" class="form-select">
                                    <option value="">Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Is Ban</label>
                                <br />
                                <input type="checkbox" name="is_ban" style="width: 30px; height: 30px;">
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 text-end">
                                <button type="submit" name="saveUser" class="btn btn-primary ">Save</button>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')   ?>