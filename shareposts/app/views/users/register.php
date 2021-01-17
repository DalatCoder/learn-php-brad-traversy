<?php require APP_ROOT . '/views/inc/header.php'; ?>

<div class="row mb-5">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2 class="text-center">Create An Account</h2>
            <p>Please fill out this form to register with us</p>
            <form action="<?php echo URL_ROOT; ?>/users/register" method="POST">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" id="name" name="name"
                           class="form-control form-control-lg <?php echo (empty($data['name_err'])) ? '' : 'is-invalid' ?>"
                           value="<?php echo $data['name']; ?>"
                    >
                    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                </div>

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

                <div class="form-group">
                    <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                    <input type="password" id="confirm_password" name="confirm_password"
                           class="form-control form-control-lg <?php echo (empty($data['confirm_password_err'])) ? '' : 'is-invalid' ?>"
                           value="<?php echo $data['confirm_password']; ?>"
                    >
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URL_ROOT ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
