<?php  
namespace App\Controllers;

header('Access-Control-Allow-Origin: *');

class Post extends BaseController{

    function index(){
        if (isset($_GET['post_id'])){
            $id = $_GET['post_id'];
            $this->selectedPost($id);
        }else{
            $this->allPost();
        }
    }

    private function selectedPost($id){
        $db = db_connect();
        $query   = $db->query('SELECT * FROM post WHERE post_id = '.$id);
        $results = $query->getResultArray();
        echo json_encode($results);
    }

    private function allPost(){
        $db = db_connect();
        $query   = $db->query('SELECT * FROM post');
        $results = $query->getResultArray();
        echo json_encode($results);
    }
}

?>