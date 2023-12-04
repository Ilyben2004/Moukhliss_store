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
    echo $title;
    echo $des;
    echo $price;
    echo $qt;   
    echo $selectedCategory;
    echo "   ". $image ."    ";
echo $pid;


    
    // Ensure a file is selected
    if ($image) {
        $imagePath = '../../../product_images/' . $image; // Set the path where you want to store the uploaded image
        echo  $imagePath;
        // Move the uploaded file to the specified location
        if (move_uploaded_file($tempImage, $imagePath)) {
            // Insert the image path or other relevant information into the database
            $query = "INSERT INTO your_table_name (image_path) VALUES ('$imagePath')";
            
            // Execute the query
            // $result = mysqli_query($connection, $query); // Execute the query using your database connection
            
            // Check if the query was successful
            // if ($result) {
            //     echo "Image uploaded and inserted into database successfully!";
            // } else {
            //     echo "Error inserting image into database: " . mysqli_error($connection);
            // }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Please select an image file.";
    }
}
?>
