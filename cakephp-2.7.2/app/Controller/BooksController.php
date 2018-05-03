<?php
class BooksController extends AppController{
    public $name = "Books";
    var $helpers = array('Paginator','Html');
    var $paginate = array();

    function index(){
      $data = $this->Book->find("all");
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";
      $this->set("data",$data);
    }

    function index2() {
     //có 2 cách viết
     //Cách 1
     /*$conditions = array(
         'conditions' => array('description LIKE' => "truyện tiên ma%" ),
       );

     $data = $this->Book->find("all" , $conditions);
     $this->set("data", $data);*/

     //Cách 2
     $data = $this->Book->find("all", array(
          'conditions' => array('description LIKE' => "truyện tiên ma%" ),
          'limit' => 2,
          //'fields' => array('title', 'description', 'id'),
          //'order' => array('id DESC'),
     ));
     $this->set("data", $data);
    }

    function danhsach(){
     $this->paginate = array(
       'limit' => 5,// mỗi page có 4 record
       'order' => array('id' => 'ASC'),//giảm dần theo id
     );
     $data = $this->paginate("Book");
     $this->set("data",$data);
}

}
