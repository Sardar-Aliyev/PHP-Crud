<?php include('includes/header.php')   ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit user
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                    <h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>
                <form action="code.php" method="POST">

                    <?php
                    $paramResult = checkParamId('id');
                    if (!is_numeric($paramResult)) {
                        echo '<h5>' . $paramResult . '</h5>';

                        return false;
                    }

                    $user = getByid('users', checkParamId('id'));
                    if ($user['status'] == 200) {
                    ?>

                        <input type="hidden" name="userId" value="<?= $user['data']['id']; ?> " required>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?= $user['data']['name']; ?> " required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Phone No.</label>
                                    <input type="text" name="number" value="<?= $user['data']['number']; ?> " required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="<?= $user['data']['email']; ?> " required class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="text" name="password" value="<?= $user['data']['password']; ?> " required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Select Role</label>
                                    <select name="role" class="form-select" required>
                                        <option value="">Select Role</option>
                                        <option value="admin" <?= $user['data']['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                        <option value="user" <?= $user['data']['role'] == 'user' ? 'selected' : ''; ?>>User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Is Ban</label>
                                    <br />
                                    <input type="checkbox" <?= $user['data']['is_ban'] == true ? 'checked' : ''; ?> name="is_ban" style="width: 30px; height: 30px;">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 text-end">
                                    <button type="submit" name="updateUser" class="btn btn-primary ">Update</button>
                                </div>

                            </div>
                        </div>

                    <?php
                    } else {
                        echo '<h5>' . $user['message'] . '</h5>';
                    }
                    ?>

                </form>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')   ?>