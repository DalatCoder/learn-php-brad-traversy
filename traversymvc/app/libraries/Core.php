<?php
/*
 * App Core Class
 * Creates URL and loads core controller
 * URL FORMAT - /controller/method/params
 */

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        // print_r($this->getUrl());

        $url = $this->getUrl();

        // Look in controllers for first value

        if (count($url) > 0) {
            $url[0] = ucwords($url[0]);
        } else {
            $url[0] = $this->currentController;
        }

        // Relative to public/index.php
        $filename = $url[0];
        $filepath = "../app/controllers/$url[0].php";
        if (file_exists($filepath)) {
            // If exists, set as controller
            $this->currentController = $filename;

            // Unset 0 Index
            unset($url[0]);
        }

        // Require the controller
        require_once "../app/controllers/{$this->currentController}.php";

        // Instantiate controller class
        $this->currentController = new $this->currentController();
    }

    /**
     * @return string[] url_parts
     */
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
        
        return [];
    }
}