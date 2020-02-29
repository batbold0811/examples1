<?php

//fetch_data.php

include('holbolt.php');


if(isset($_POST['search'])){
 $search = $_POST['search'];

 switch ($_POST['action']) {
   case 1:
     $query = "SELECT id, name FROM category WHERE name like '%".$search."%' LIMIT 5";
     break;
   
   default:
    $query = "SELECT id, name FROM category WHERE name like '%".$search."%' LIMIT 5";    
     break;
 }
 $result = mysqli_query($connection,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("value"=>$row['id'],"label"=>$row['name']);
 }

 echo json_encode($response);
}

exit;


?>