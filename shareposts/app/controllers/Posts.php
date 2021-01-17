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

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];

            // Validate title
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }

            // Validate body
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }

            // Make sure no errors
            if (empty($data['title_err']) && empty($data['body_err'])) {
                // Passed
                if ($this->postModel->addPost($data)) {
                    flash('post_added', 'Post added successfully!');
                    redirect('posts');
                } else {
                    die('Oops! Something went wrong 😢');
                }
            } else {
                // Load view with errors
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => '',
                'title_err' => '',
                'body_err' => ''
            ];
        }

        $this->view('posts/add', $data);
    }
}