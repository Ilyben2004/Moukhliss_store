<?php

require '../../../PHP/Functions.php';
 
   if(isset($_POST['category']) and isset($_POST['id'])){
      $category = $_POST['category'];
      $id = $_POST['id'];
      $conn=connect();
      $updateQuery = "UPDATE orders SET STATUS = '$category'
       WHERE id=$id ";

if ($conn->query($updateQuery) === TRUE) {
    echo "Update successful";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the connection
$$conn->close();

 
      
   }
?>