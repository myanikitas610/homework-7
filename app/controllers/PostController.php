<?php

namespace app\controllers;
use app\core\Controller;
class PostController extends Controller
{
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts
//an example is in app/controllers/UsersController
 // Method to return some posts
 public function submitPosts()
    {
        include './assets/views/postsViews.php';
    }


    public function validatePost()
    {
        $username = $_POST['username'] ? $_POST['username'] : false;
        $title = $_POST['title'] ? $_POST['title'] : false;
        $description = $_POST['description'] ? $_POST['description'] : false;
        $errors = [];

        if ($username) {
            $username = htmlspecialchars($username, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

            if (strlen($username) < 2) {
                $errors['usernameShort'] = 'username is too short';
            }
        } else {
            $errors['requiredName'] = 'username is required';
        }

        if ($title) {
            $title = htmlspecialchars($title, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

            if (strlen($title) < 2) {
                $errors['titleShort'] = 'title is too short';
            }
        } else {
            $errors['requiredTitle'] = 'title is required';
        }

        if ($description) {
            $description = htmlspecialchars($description, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

            if (strlen($description) < 2) {
                $errors['descriptionShort'] = 'description is too short';
            }
        } else {
            $errors['requiredDescription'] = 'description is required';
        }

        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }

        $returnData = [
            'name' => $username,
            'title' => $title,
            'description' => $description,
        ];
        echo "<span class='form-success'>Post shared successfully!</span>";
    }
}