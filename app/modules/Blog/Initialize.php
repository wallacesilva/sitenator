<?php

namespace Blog;

use \App;
use \Menu;
use \Route;

class Initialize extends \SlimStarter\Module\Initializer{

    public function getModuleName(){
        return 'Blog';
    }

    public function getModuleAccessor(){
        return 'blog';
    }

    /*public function registerAdminMenu(){

        $adminMenu = Menu::get('admin_sidebar');

        $blog = $adminMenu->createItem('blog', array(
            'label' => _('Blog'),
            'icon'  => 'group',
            'url'   => '#'
        ));
        $blog->setAttribute('class', 'nav nav-second-level');

        $postMenu = $adminMenu->createItem('post', array(
            'label' => _('Post'),
            'icon'  => 'pencil',
            'url'   => 'admin/post'
        ));

        $catMenu = $adminMenu->createItem('post_category', array(
            'label' => _('Category'),
            'icon'  => 'tag',
            'url'   => 'admin/post_category'
        ));

        $blog->addChildren($postMenu);
        $blog->addChildren($catMenu);

        $adminMenu->addItem('blog', $blog);
    }*/

    /*public function registerAdminRoute(){
        Route::resource('/post', 'Blog\Controllers\AdminPostController');
        Route::resource('/post_category', 'Blog\Controllers\AdminCategoryController');
    }*/

    public function registerPublicRoute(){
        Route::resource('/blog', 'Blog\Controllers\PostController');
        //Route::resource('/blog/category', 'Blog\Controllers\CategoryController');
        /** Route group to blog resource */
        Route::group('/blog', function(){
            Route::get('/(:lang)', 'Blog\Controllers\PostController:index'); // GET /book
            Route::get('/:lang/page/:page', 'Blog\Controllers\PostController:index'); // GET /book
            Route::get('/:lang/search/:term', 'Blog\Controllers\PostController:search'); // GET /book
            Route::get('/:lang/:titleslug', 'Blog\Controllers\PostController:single'); // Show single post
            Route::get('/:lang/category/:categoryname', 'Blog\Controllers\PostController:category'); // 
            //Route::get('/create', 'Blog\Controllers\PostController:create'); // Create form of /book
            //Route::get('/:id', 'Blog\Controllers\PostController:show'); // GET /book/:id
            //Route::get('/:id/edit', 'Blog\Controllers\PostController:edit'); // GET /book/:id/edit
            //Route::put('/:id', 'Blog\Controllers\PostController:update'); // PUT /book/:id
            //Route::delete('/:id', 'Blog\Controllers\PostController:destroy'); // DELETE /book/:id
        });
    }
}