<?php
class User extends ActiveRecord\Model 
{
    # explicit table name since our table is not "books" 
    static $table_name = 'users';

    # explicit pk since our pk is not "id" 
    //static $primary_key = 'id';

    # explicit connection name since we always want our test db with this model
    //static $connection = ENV;

    # explicit database name will generate sql like so => my_db.my_book
    //static $db = '';

    // lista de atributos que podem ser editados
    static $attr_accessible = array('name', 'email', 'status', 'password');
}

// file: app/models/