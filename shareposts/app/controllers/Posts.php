<?php

class Posts extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            flash('must_login', 'User must login to see posts', 'alert alert-danger');
            redirect('users/login');
        }
    }

    public function index()
    {
        $data = [];

        $this->view('posts/index', $data);
    }
}