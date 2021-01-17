<?php require APP_ROOT . '/views/inc/header.php'; ?>

<div class="row mb-3">
    <div class="col-md-6">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6">
        <a href="<?php echo URL_ROOT; ?>/posts/add" class="btn btn-primary float-right">
            <i class="fa fa-pencil-alt"></i> Add Post
        </a>
    </div>
</div>

<?php foreach ($data['posts'] as $post): ?>
    <div class="card card-body mb-3">
        <h4 class="card-title"><?php echo $post->title; ?></h4>
        <div class="bg-light p-2 mb-3">
            Written by <?php echo $post->name; ?> on <?php echo $post->postCreated; ?>
        </div>
        <p class="card-text"><?php echo truncatePostBody($post->body); ?></p>
        <a
                href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $post->postId; ?>"
                class="btn btn-dark">Read more
        </a>
    </div>
<?php endforeach; ?>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
