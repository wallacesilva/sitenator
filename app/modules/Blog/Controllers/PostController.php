<?php

namespace Blog\Controllers;

use \App;
use \View;
use \Menu;
use \User;
use \Input;
use \Sentry;
use \Request;
use \Response;
use \Exception;
use \Admin\BaseController;
use \Cartalyst\Sentry\Users\UserNotFoundException;

use \Post; // model

class PostController extends BaseController
{

    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDefault('developer-v1.2');

    }

    /**
     * display list of resource
     */
    public function index($page = 1)
    {
        $user = Sentry::getUser();
        $this->data['title'] = _('Blog');
        $this->data['posts'] = Post::all();

        /** load the user.js app */
        //$this->loadJs('app/user.js');

        /** publish necessary js  variable */
        //$this->publish('baseUrl', $this->data['baseUrl']);

        /** render the template */
        View::display('index.twig', $this->data);
    }

    public function single($lang=null, $titleslug=null)
    {   
        $this->data['title'] = _('Blog');
        $this->data['post'] = Post::where('slug', $titleslug)->where('locale', $lang)->first();

        $this->data['title'] = $this->data['post']->title . ' - ' . $this->data['title'];
        View::display('single.twig', $this->data);
    }

}