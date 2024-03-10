<?php

namespace app\controllers;
use app\core\Controller;
class PostController extends Controller
{
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts
//an example is in app/controllers/UsersController
 // Method to return some posts
 public function getPosts()
 {
    $posts = Post::all();

     return $posts;
 }

 // Method to render a Twig template to show the posts
 public function showPosts()
 {
     $posts = Post::all();
     $template = $this->twig->load('post/showPosts.twig');

     $posts = $this->getPosts();

     $data = [
         'title' => 'Posts',
         'posts' => $posts,
     ];
     
     echo $template->render($data);
 }
}
