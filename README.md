Sitenator
===========

Baseado no SlimStarter(https://github.com/xsanisty/SlimStarter) que usa Slim Framework, Sentry, Eloquent ORM e outros para gerenciar usuários e criar um sistema modular. 

A idéia é ter um projeto gerenciador de conteudo ou seja um CMS, porém no estilo criador de site como por exemplo PyroCMS (https://www.pyrocms.com/),  Wordpress(http://wordpress.com) e outros onde tem-se o cms porém tem uma "loja" (marketplace) para se comprar mais funcionalidades. Será tudo da in9.

####Lista de Tarefas
- Gerenciar páginas frontend;
- Criar gerenciador de páginas no admin para poder add, editar, remover via admin;
- Melhorar o sistema de templates;
- Melhorar o tema do admin para algo mais popular e que combine melhor com o projeto;
- Suporte a Multilinguagem;
- Começar a criar outros módulos como: Blog, Galerias, Banners, Blocos(estilo widgets);

####Instalação

> Veja como instalar o sistema

#####1 Instalação Manual
Após baixar o código execute  ```composer install```.

```
$ git clone https://wallacesilva@bitbucket.org/wallacesilva/sitenator.git
$ composer install
```

#####2 Configurações de Permissões
Depois de executar as depencias com o composer install, você precisa mudar as permissões dos arquivos e pastas a seguir:

```
chmod -R 777 app/storage/
chmod 666 app/config/database.php
```

#####3 Configurar banco de dados
Você pode acessar o instalador via browser, com algo similar a:
```
http://localhost/path/to/sitenator/public/install.php
```

####Configuração
Configurações do sistema ficam em ```app/config```, pode editar database.php, cookie.php e qualquer outro que precise


####Rotas (Urls)
Configuração de rotas fica localizado em ```app/routes.php```, isso é usado para acessar o route facade do Slim Router(slim framework).
Se você preferir pode usar a instancia do Slim para alterar as rotas vias $app.

Exemplo de rota
```php
Route::get('/', function(){
    View::display('welcome.twig');
});

/** Usando Slim diretamente */
$app->get('/', function() use ($app){
    $app->view->display('welcome.twig');
});
```

Rota para um metodo do Controller com verbos http
```php
/** get method */
Route::get('/', 'SomeController:someMethod');

/** post method */
Route::post('/post', 'PostController:create');

/** put method */
Route::put('/post/:id', 'PostController:update');

/** delete method */
Route::delete('/post/:id', 'PostController:destroy');
```

Route Middleware (Slim Framework)
```php
/** route middleware */
Route::get('/admin', function(){
    //route middleware to check user login or redirect
}, 'AdminController:index');
```

Grupo de Rotas
```php
/** Grupo de rota para recurso/class Book */
Route::group('/book', function(){
    Route::get('/', 'BookController:index'); // GET /book
    Route::post('/', 'BookController:store'); // POST /book
    Route::get('/create', 'BookController:create'); // Create form of /book
    Route::get('/:id', 'BookController:show'); // GET /book/:id
    Route::get('/:id/edit', 'BookController:edit'); // GET /book/:id/edit
    Route::put('/:id', 'BookController:update'); // PUT /book/:id
    Route::delete('/:id', 'BookController:destroy'); // DELETE /book/:id
});
```

Route Resource (Recurso de Rota)
Isso vai ter o mesmo efeito que o grupo de rotas visto acima e como o Laravel Route::resource
```php
/** Recurso de rota pra Book/Livro */
Route::resource('/book', 'BookController');
```

RouteController
```php
/** Route to book resource */
Route::controller('/book', 'BookController');

/**
 * GET /book will be mapped to BookController:getIndex
 * POST /book will be mapped to BookController:postIndex
 * [METHOD] /book/[path] will be mapped to BookController:methodPath
 */
```

####Modelo do Banco / ORM (Model)
Models ficam na pasta ```app/models```, o Eloquent é usado como um gerenciador de banco de dados, você pode escrever um model como você escreveria um Model no Laravel. Para uma documentação completa sobre o Eloquent acesse [http://laravel.com/docs/eloquent](http://laravel.com/docs/eloquent)

arquivo: app/models/Book.php
```php
class Book Extends Model{}
```
>Observação: Eloquent tem algumas limitações de dependências para alguns componentes do Laravel e Symfony Framework que não foram incluidas, como por exemplo ```remember()```, ```paginate```, e o metodo de validação, que depende do ```Illuminate\Cache```, ```Illuminate\Filesystem```, ```Symfony\Finder```, dentre outros.

####Controller
Controollers ficam na pasta ```app/controllers```, você pode dar um "extends" no BaseController para ter acesso aos objetos predefinidos.
Você pode também colocar seu controller no namespace para agrupar seu controller.

arquivo : app/controllers/HomeController.php
```php
Class HomeController extends BaseController{

    public function welcome(){
        $this->data['title'] = 'Some title';
        View::display('welcome.twig', $this->data);
    }
}
```

#####Controller helper (Controller de Ajuda)

######Pegar referencia para a instancia do Slim Framework
Você pode acessar a instancia do Slim no seu controller acessando a propriedade $app.
```php
$this->app; //reference to Slim instance
```

######Loading javascript assets or CSS assets
######Carregando assets javascripts ou CSS
O sistema possui um template padrão com js e css, porém para carregar seu próprio arquivo js e css voce pode usar ```loadJs``` ou ```loadCss``` , 
```removeJs``` ou ```removeCss``` para remover js ou css, 
```resetJs``` ou  ```resetCss``` para remover todos os arquivos js or css adicionados.

```php
/**
 * load local js file located in public/assets/js/application.js
 * by default, it will be placed in the last list,
 * to modify it, use position option in second parameter
 * array(
 *      'position' => 'last|first|after:file|before:file'
 * )
 */
$this->loadJs('application.js', ['position' => 'after:jquery.js'])

/**
 * load external js file, eg: js in CDN
 * use location option in second parameter
 * array(
 *      'location' => 'internal|external'
 * )
 */
$this->loadJs('http://code.jquery.com/jquery-1.11.0.min.js', ['location' => 'external']);

/** remove js file from the list */
$this->removeJs('user.js');

/** reset js queue, no js file will be loaded */
$this->resetJs();


/** load local css file located in public/assets/css/style.css */
$this->loadCss('style.css')

/** load external css file, eg: js in CDN */
$this->loadCss('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css', ['location' => 'external']);

/**
```

######Publish PHP variable to javascript
You can also publish PHP variable to make it accessible via javascript (must extends master.twig)
```php
/** publish the variable */
$this->publish('user', User::find(1)->toArray());

/** remove the variable */
$this->unpublish('user');
```

the user variable will be accessible in 'global' namespace
```javascript
console.log(global.user);
```

######Default variable available in template

####View
Views file are located in ```app/views``` directory in twig format, there is master.twig with 'body' block as default master template
shipped with SlimStarer that will provide default access to published js variable.

For detailed Twig documentation, please refer to http://twig.sensiolabs.org/documentation


file : app/views/welcome.twig
```html
{% extends 'master.twig' %}
{% block body %}
    Welcome to SlimStarter
{% endblock %}

```

#####Rendering view inside controller
If your controller extends the BaseController class, you will have access to $data property which will be the placeholder for all
view's data.

```php
View::display('welcome.twig', $this->data);
```

####Hooks and Middlewares
You can still hook the Slim event, or registering Middleware to Slim instance in ```app/bootstrap/app.php```,
Slim instance is accessible in ```$app``` variable.

```php
$app->hook('slim.before.route', function(){
    //do your hook
});

$app->add(new SomeActionMiddleware());
```

You can write your own middleware class in ```app/middlewares``` directory.

file : app/middlewares/SomeActionMiddleware.php
```php
class SomeActionMiddleware extends Middleware
{
    public function call()
    {
        // Get reference to application
        $app = $this->app;

        // Run inner middleware and application
        $this->next->call();

        // do your stuff
    }
}
```

In case autoloader cannot resolve your classes, do ```composer dump-autoload``` so composer can resolve your class location