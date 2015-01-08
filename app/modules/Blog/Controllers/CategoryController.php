<?php

namespace Blog\Controllers;

use \App;
use \View;
use \Menu;
use \Admin\BaseController;

class CategoryController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        Menu::get('admin_sidebar')->setActiveMenu('post_category');
    }

    public function index()
    {
        $this->data['title'] = 'Category';
        /** render the template */
        View::display('@blog/category/index.twig', $this->data);
    }

    public function show()
    {

    }

    public function store()
    {

    }

    public function create()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}