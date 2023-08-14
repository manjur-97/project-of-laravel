<?php
require_once("db_confiq.php");

class Customers{
   public $id;
   public $name;
   public $mobile;
   public $email;

   public function __construct()
   {
    
   }

   static public function index(){
    global $db;
    $query=$db->query('select * from core_customers');
    while($row=$query->fetch_object()){
        $data[]=$row;
    }
    
    return json_encode($data);


   }
   public function create(){
    
    
   }
   public function store(){
    
   }
   public function show(){
    
   }
   public function edit(){
    
   }
   public function delete($id){
    global $db;
    $query=$db->query("delete from core_customers where id=$id");

    
   }
   

};

 $obj= Customers::index();



?>