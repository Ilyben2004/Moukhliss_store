<?php
require '../../../PHP/Functions.php';

$connection= connect();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];


    $title = $_POST['title'];
    $des = $_POST['descreption'];
    $price = $_POST['price'];
    $qt  =$_POST['quantity'];
    $pid  =$_POST['pid'];

    $selectedCategory = $_POST['category'];

$id_category=getidbycate($selectedCategory);

$updateQuery = "UPDATE products SET title = '$title', DESCREPTION = '$des',PRIX=$price , id_category=$id_category, Quantity=$qt WHERE id = '$pid'";

// Execute the update query
if (mysqli_query($connection, $updateQuery)) {
    echo "Update successful!";
} else {
    echo "Error updating record: " . mysqli_error($connection);
}

    
    if ($image) {
        $imagePath = '../../../product_images/' . $image; // Set the path where you want to store the uploaded image
          
        if (move_uploaded_file($tempImage, $imagePath)) {
            $updateQuery = "UPDATE products SET image_file = '$image' WHERE id = '$pid'";

// Execute the update query
if (mysqli_query($connection, $updateQuery)) {
    echo "Update successful!";

} else {
    echo "Error updating record: " . mysqli_error($connection);
}
          
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Please select an image file.";
    }
}
header("Location: display.php");
exit; // 
?>
