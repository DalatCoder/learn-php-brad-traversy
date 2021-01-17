<?php

class Posts extends Controller
{
    private $postModel;

    public function __construct()
    {
        if (!isLoggedIn()) {
            flash('must_login', 'User must login to see posts', 'alert alert-danger');
            redirect('users/login');
        }

        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        // Get posts
        $posts = $this->postModel->getPosts();

        $data = [
            'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }
}