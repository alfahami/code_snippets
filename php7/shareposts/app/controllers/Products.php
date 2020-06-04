<?php
class Products extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->getPosts();
        $data = ['title' => 'List of PRODUCTS',
            'posts' => $posts,
        ];
        $this->view('pages/index', $data);
    }

    public function hello() {
        $data = ['title' => 'About US'];
        $this->view('pages/about', $data);
    }

    public function item($id) {
        if ($id === "") {
            $this->index();
        } else {
            echo $id;
        }
    }
}
