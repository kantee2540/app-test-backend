<?php 
namespace App\Controllers;

class CreatePost extends BaseController{

    function index(){
        $message ="hh";
        $db = db_connect();

        $builder = $db->table('post');
        $query = $builder->get();
    }
}

?>