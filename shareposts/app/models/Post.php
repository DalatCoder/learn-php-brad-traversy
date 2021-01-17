<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPosts()
    {
        $this->db->query('SELECT *,
                              posts.id as postId,
                              users.id as userId,
                              posts.created_at as postCreated,
                              users.created_at as userCreated
                              FROM Posts 
                              INNER JOIN Users
                              ON Posts.user_id = Users.id
                              ORDER BY Posts.created_at DESC 
                              ');
        return $this->db->resultSet();
    }
}