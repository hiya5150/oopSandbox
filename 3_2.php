<?php

class Posts {

    public function __construct() {
        $this->postModel =$this->model("post");
}

    public function index() {

}
    public function add() {

    }

    public function edit($id) {
        $post = $this->postModel->fethcPost($id);

            $this->view("edit", ["post" => $post]);

            }
        }
<h1><?php echo $data["title"]; ?></h1>