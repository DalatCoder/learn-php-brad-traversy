<?php require APP_ROOT . '/views/inc/header.php'; ?>

<div class="row mb-5">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2 class="text-center">Login</h2>
            <p>Please fill in your credentials to login</p>
            <form action="<?php echo URL_ROOT; ?>/users/login" method="POST">
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" id="email" name="email"
                           class="form-control form-control-lg <?php echo (empty($data['email_err'])) ? '' : 'is-invalid' ?>"
                           value="<?php echo $data['email']; ?>"
                    >
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                </div>

                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" id="password" name="password"
                           class="form-control form-control-lg <?php echo (empty($data['password_err'])) ? '' : 'is-invalid' ?>"
                           value="<?php echo $data['password']; ?>"
                    >
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URL_ROOT ?>/users/register" class="btn btn-light btn-block">No account? Register now</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
