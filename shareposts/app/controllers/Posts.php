<?php

class Posts extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [];

        $this->view('posts/index', $data);
    }
}