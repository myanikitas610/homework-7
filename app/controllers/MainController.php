<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{

    public function homepage()
    {
        // $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        var_dump($homepageData);
    }

    public function notFound() {
        //todo create a 404 twig template in app/public/assets/views
        //an example is in app/controllers/UsersController
        //and return it from this method
        // $template = $this->twig->load('users/users.twig');
        // $homepageData = [
        //     'title'=> '404 Not Found',
        //     ];
        //     echo $template->render($homepageData);
        echo '404';
    }
    
    

}