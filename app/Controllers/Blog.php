<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;
use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            "meta_title" => "Codeigniter 4 Blog",
            "title" => "This is a Blog Page",

        ];

        $posts =

            ["Title 1", "Title 2", "Title 3"];



        $data["posts"] = $posts;

        // print_r($data);
        return view("blog", $data);


        // return view('blog');
    }

    // function validation(){
    //     $shop = new Shop();
    //     echo $shop->product('laptop', 'lenovo') . "<br>";

    //     $adminShop = new AdminShop();
    //     echo $adminShop->product("laptop", "lenovo");
    // }

    public function post($id)
    {

        $model = new BlogModel();

        $post = $model->find($id);

        // print_r(
        //     $post
        // );

        if ($post) {

            $data = [
                "meta_title" => $post["post_title"],
                "title" => $post["post_content"],
                "post" => $post,
            ];
        } else {
            $data = [
                "meta_title" => "Post not found",
                "title" => "Post not found"
            ];
        }

        // print_r($data["post"]["post_id"]);

        // return view("single_post");
        return view("single_post", $data);
        // echo view("single_post");
        // echo view("templates/footer");

    }

    public function new()
    {

        $data = [
            "meta_title" => "New Post",
            "title" => "Create new post",
        ];

        if ($this->request->getMethod() == "post") {
            $model = new BlogModel();

            // print_r($_POST);

            $model->save($_POST);
        }

        return view("new_post", $data);
    }

    public function delete($id)
    {
        $model = new BlogModel();
        $post = $model->find($id);
        if ($post) {

            $model->delete($id);
            return redirect()->to("/blog");
        }
    }

    public function edit($id)
    {

        $model = new BlogModel();
        $post = $model->find($id);

        // print_r($post);

        $data = [
            "meta_title" => $post["post_title"],
            "title" => $post["post_content"],
        ];

        if ($this->request->getMethod() == "post") {
            $model = new BlogModel();
            $_POST["post_id"] = $id;

            // print_r($_POST);
            $model->save($_POST);

            $post = $model->find($id);

        }

        $data["post"] = $post;

        return view("edit_post", $data);
    }

}