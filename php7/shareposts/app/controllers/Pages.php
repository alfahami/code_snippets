<?php
class Pages extends Controller {
    public function __construct() {

    }

    public function index() {
        if (isLoggedIn()) {
            redirect('posts');
        }

        $data = ['title' => 'SharePosts',
            'description' => 'Simple social network built on the TraversyMVC PHP framework',
        ];
        $view = $this->view('pages/index', $data);
    }

    public function about() {
        $data = ['title' => 'About US',
            'description' => 'App to share posts with other users',
        ];
        $this->view('pages/about', $data);
    }

    public function test($id) {
        if ($id === "test") {
            echo 'test';
        } else {
            echo $id;
        }
    }
}
