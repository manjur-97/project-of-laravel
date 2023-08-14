<?php
require_once("db_confiq.php");

class CustomerAPI{
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
    
   return json_encode($data) ;


   }
   public function create(){
    
    
   }
   public function save(){
    
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

// create instance of CustomerAPI class


// check for function parameter in URL
// if (isset($_GET['function'])) {
//     // call appropriate method based on function parameter
//     switch ($_GET['function']) {
//         case 'view':
//             // call view method and return array of objects as JSON
//             echo json_encode($api->index());
//             break;
//         case 'save':
//             // check for name, email, and phone parameters in POST request
//             if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
//                 // call save method and return result as JSON
//                 echo json_encode($api->save($_POST['name'], $_POST['email'], $_POST['phone']));
//             } else {
//                 // return error message if parameters are missing
//                 echo json_encode(array("success" => false, "message" => "Missing parameters"));
//             }
//             break;
//         default:
//             // return error message if function parameter is invalid
//             echo json_encode(array("success" => false, "message" => "Invalid function"));
//             break;
//     }
// } else {
//     // return error message if function parameter is missing
//     echo json_encode(array("success" => false, "message" => "Missing function"));
// }


 $obj= CustomerAPI::index();
  echo $obj;

