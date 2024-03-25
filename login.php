<?php $pageTitle = 'Login';
include('includes/header.php');

if (isset($_SESSION['auth'])) {
    redirect('index.php', 'You are already loggid in');
}

?>

<div class="py-3 bg-dark text-center">
    <h3 class="text-white">Login</h3>
</div>

<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        
                        <?= alertMessage(); ?>

                        <form action="login-code.php" method="post">
                            <div class="mb-3">
                                <label>Email Adress</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="loginbtn" class="btn btn-primary w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>