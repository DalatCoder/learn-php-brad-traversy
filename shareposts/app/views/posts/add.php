<?php require APP_ROOT . '/views/inc/header.php'; ?>

<a href="<?php echo URL_ROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-3">
    <h2 class="text-center">Add Post</h2>
    <p>Create post with this form</p>
    <form action="<?php echo URL_ROOT; ?>/posts/add" method="POST">
        <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" id="title" name="title"
                   class="form-control form-control-lg <?php echo (empty($data['title_err'])) ? '' : 'is-invalid' ?>"
                   value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>

        <div class="form-group">
            <label for="body">Body: <sup>*</sup></label>
            <textarea name="body" id="body" cols="30" rows="10"
                      class="form-control form-control-lg <?php echo (empty($data['body_err'])) ? '' : 'is-invalid' ?>"><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
        </div>
        <input type="submit" value="Create new posts" class="btn btn-success">
    </form>
</div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
