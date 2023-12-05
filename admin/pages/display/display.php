<?php
session_start();
require '../../../PHP/Functions.php';
 

if (!isset($_SESSION['username'])) {
  
	$user=$_SESSION['username'];


}





 

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/jpeg" href="../../../gym.jpeg"/>

    <meta charset="UTF-8">
    <title>All Products </title>
	<link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="../../style.css"> <!-- Link to your CSS file -->
     <!-- Link to your CSS file -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


</head>
<body>
  
  <div class="dashboard">
	<aside class="search-wrap">
		<div class="search">
		<label for="search">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
				<input type="text" id="search">
			</label>
		
		</div>
		
		<div class="user-actions">
			
			<button>
			<a href="../../../index.php">
				
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"/><path d="M11 2h2v10h-2z"/></svg>
	</a>				</button>
		</div>
	</aside>
	
	<header class="menu-wrap">
		<figure class="user">
			<div class="user-avatar">
				<img src="..\..\..\resources\images\profile.webp" alt="Amanda King">
			</div>
			<figcaption>
				<?php  echo $user ?>
			</figcaption>
		</figure>
	
        <nav>
			<section class="dicover">
				<h3>Discover</h3>
				
				<ul>
				<li>
						<a href="../../dash.php">
						<svg width="24" height="24"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a,.b{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}.a{fill-rule:evenodd;}</style></defs><path class="a" d="M2,2V20a2,2,0,0,0,2,2H22"></path><rect class="b" height="6" rx="1.5" width="3" x="6" y="12"></rect><rect class="b" height="6" rx="1.5" width="3" x="12" y="7"></rect><rect class="b" height="6" rx="1.5" width="3" x="18" y="3"></rect></g></svg>
						Dashboard
						</a>
					</li>
					<li>
						<a href="..\add-number\add.php">
						<svg width="24" height="24" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.0009 21.3201H8.43094C7.33237 21.2923 6.27951 20.8746 5.4606 20.1418C4.64169 19.409 4.11011 18.4088 3.96094 17.3201L2.96094 9.32007" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20.9992 9.32007L20.6992 11.8201" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 9.32004C8.81444 7.20973 15.1856 7.20973 21 9.32004" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.42969 8.34006L9.07969 3.32007" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.5699 8.34006L14.9199 3.32007" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M19 22.8201V14.8201" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 18.8201H23" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>	Add a new Product
						</a>
					</li>
					
					<li>
						<a href="..\display\display.php">
						<svg width="24" height="24" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="0" fill="none" width="20" height="20"></rect> <g> <path d="M17 8h1v11H2V8h1V6c0-2.76 2.24-5 5-5 .71 0 1.39.15 2 .42.61-.27 1.29-.42 2-.42 2.76 0 5 2.24 5 5v2zM5 6v2h2V6c0-1.13.39-2.16 1.02-3H8C6.35 3 5 4.35 5 6zm10 2V6c0-1.65-1.35-3-3-3h-.02c.63.84 1.02 1.87 1.02 3v2h2zm-5-4.22C9.39 4.33 9 5.12 9 6v2h2V6c0-.88-.39-1.67-1-2.22z"></path> </g> </g></svg>
                       	All Products</a>
					</li>
					
					
				
				</ul>
			</section>
		
			
			
			
		</nav>
	</header>
    <div class="display">


    
	
 
  <div class="product-wrapper">
  <div class="display">
	<div class="before_table">
		
	<select name="category" class="classic" name="chooses" id="products">
	<option  value="">All Products</option>

	<?php
  
  $cates=  get_all_cate();
  foreach ($cates as $cate) {



   ?>
<option  value="<?php echo $cate['Category_name'] ?>"><?php echo $cate['Category_name']  ?></option><?php }?>

</select>

	</div>

<div id="showdata" class="content_users">



  <table>
 

	    

	<thead>
	<tr>
		<td>Image Product</td>
		<td>id</td>
		<td>Title</td>
		
		<td>Price</td>
		<td>Category</td>
		<td>Quantity</td>
		<td>Actions</td>
	</tr>
	</thead>
	<?php 
         $products = getAllProducts();
		 if ($products!=0){
         foreach ($products as $product) {
		
			   ?>
		

	<tr id="tr_product_<?php echo $product['id'];  ?>" <?php if($product['Quantity']<=0){
		echo "class=red_row";
	}?>>
		
	
		<td><img src="..\..\..\product_images\<?php echo $product['image_file']; ?>" alt="" height="50px" width="50px"></td>
		<td><?php echo $product['id'] ; ?></td>

		<td><?php echo $product['title'] ; ?></td>
		<td><?php echo$product['PRIX'];?></td>
		<td><?php echo $product['Category_name']; ?></td>
		
		<td><?php echo $product['Quantity'];?></td>
		<td><a onclick="openForm('<?php echo $product['id']; ?>')"><svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="48" height="48" fill="white" fill-opacity="0.01"></rect> <path d="M42 26V40C42 41.1046 41.1046 42 40 42H8C6.89543 42 6 41.1046 6 40V8C6 6.89543 6.89543 6 8 6L22 6" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 26.7199V34H21.3172L42 13.3081L34.6951 6L14 26.7199Z" fill="#2F88FF" stroke="#000000" stroke-width="4" stroke-linejoin="round"></path> </g></svg> </a>
		<a onclick="deleteTr('<?php echo $product['id']; ?>')"><svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="10.24"><path d="M779.5 1002.7h-535c-64.3 0-116.5-52.3-116.5-116.5V170.7h768v715.5c0 64.2-52.3 116.5-116.5 116.5zM213.3 256v630.1c0 17.2 14 31.2 31.2 31.2h534.9c17.2 0 31.2-14 31.2-31.2V256H213.3z" fill="#0452c8"></path><path d="M917.3 256H106.7C83.1 256 64 236.9 64 213.3s19.1-42.7 42.7-42.7h810.7c23.6 0 42.7 19.1 42.7 42.7S940.9 256 917.3 256zM618.7 128H405.3c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7h213.3c23.6 0 42.7 19.1 42.7 42.7S642.2 128 618.7 128zM405.3 725.3c-23.6 0-42.7-19.1-42.7-42.7v-256c0-23.6 19.1-42.7 42.7-42.7S448 403 448 426.6v256c0 23.6-19.1 42.7-42.7 42.7zM618.7 725.3c-23.6 0-42.7-19.1-42.7-42.7v-256c0-23.6 19.1-42.7 42.7-42.7s42.7 19.1 42.7 42.7v256c-0.1 23.6-19.2 42.7-42.7 42.7z" fill="#5F6379"></path></g><g id="SVGRepo_iconCarrier"><path d="M779.5 1002.7h-535c-64.3 0-116.5-52.3-116.5-116.5V170.7h768v715.5c0 64.2-52.3 116.5-116.5 116.5zM213.3 256v630.1c0 17.2 14 31.2 31.2 31.2h534.9c17.2 0 31.2-14 31.2-31.2V256H213.3z" fill="#0452c8"></path><path d="M917.3 256H106.7C83.1 256 64 236.9 64 213.3s19.1-42.7 42.7-42.7h810.7c23.6 0 42.7 19.1 42.7 42.7S940.9 256 917.3 256zM618.7 128H405.3c-23.6 0-42.7-19.1-42.7-42.7s19.1-42.7 42.7-42.7h213.3c23.6 0 42.7 19.1 42.7 42.7S642.2 128 618.7 128zM405.3 725.3c-23.6 0-42.7-19.1-42.7-42.7v-256c0-23.6 19.1-42.7 42.7-42.7S448 403 448 426.6v256c0 23.6-19.1 42.7-42.7 42.7zM618.7 725.3c-23.6 0-42.7-19.1-42.7-42.7v-256c0-23.6 19.1-42.7 42.7-42.7s42.7 19.1 42.7 42.7v256c-0.1 23.6-19.2 42.7-42.7 42.7z" fill="#5F6379"></path></g></svg></a>
		
		
		</td>
		
	</tr>
	<form id="form_product_<?php echo $product['id'] ; ?>" >

	<div  class="form-popup" id="form_product_<?php echo $product['id'] ; ?>">
	
	<img   onclick="uploadImage(<?php echo $product['id'];?>)" id="uploadedImage_<?php echo $product['id'];?>" src="..\..\..\product_images\<?php echo $product['image_file']; ?>" alt="">
    <input name="image"  type="file" id="imageInput_<?php echo $product['id'];?>" style="display: none;" onchange="previewImage(event, <?php echo $product['id'];?>)">
	<input type="hidden" name="pid" value="<?php echo  $product['id'] ; ?>">

	<br>

	
	</center>
	<br>
	<hr>
	<center>
	<div class="content_product">

	
	<label for="">Title : </label>	<br><input value="<?php echo $product['title'];?>" name="title" id="input_test" type="text"><br>

	<label for="">Descreption : </label>	<br><textarea name="descreption" id="w3review"  rows="4" cols="50">
<?php echo $product['DESCREPTION'];  ?>
</textarea><br>
	<label for=""> PRICE :</label>	<br><input value="<?php echo $product['PRIX'];?>"  name="price" type="number"><br>
	<label for="">QUANTITY : </label>	<br><input value="<?php echo $product['Quantity'];?>"  name="quantity" type="number"><br>
	<label for="">Please choose the new Category : </label><br>
	<select name="category" class="classic"  id="products">
	<option  value="<?php echo $product['Category_name'] ?>"><?php echo $product['Category_name'] ?></option>

	<?php
  
 
  foreach ($cates as $cate) {

	if($cate['Category_name']!=$product['Category_name']){



   ?>
<option  value="<?php echo $cate['Category_name'] ?>"><?php echo $cate['Category_name']  ?></option><?php }}?>
  </select></div>
	</center>
	<hr>
	<input  >

		</div>
		

		</form>


<?php
	}
	}


	
	
   
?>

	
</table>
</div>

</div>

    
    


    </div>

  
    </div>
	<script>var popups = document.getElementsByClassName('form-popup');


for (var i = 0; i < popups.length; i++) {
    popups[i].style.display = 'none';
}</script>
<script>function openForm( formId) {
	console.log(formId);
document.getElementById("form_product_"+formId).style.display = "block";}
</script>
	<script src="script.js"></script> 

<script>
	function modifyproduct(id_product){
		var form = document.getElementById("form_product_"+id_product);
		var title = form.title.value;
		console.log(title);
	}
</script>
	<script>
  // Function to trigger file input when the image is clicked
  function uploadImage(image_id) {
    document.getElementById('imageInput_'+image_id).click();
  }

  // Function to preview the selected image before uploading
  function previewImage(event, image_id) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      const imgElement = document.getElementById('uploadedImage_'+image_id);
      imgElement.src = reader.result;
	  d
    }

    if (file) {
      reader.readAsDataURL(file);
    }
  }
</script>
<script>
	function deleteTr(id){

		console.log("function delete.tr called");
		var element = document.getElementById('tr_product_'+id);
		element.remove();
		var data = new FormData();
data.append('id', id); // Ensure 'id' here matches the variable name you're sending

// Make a POST request to the PHP script with the variable
fetch('delete.php', {
  method: 'POST',
  body: data
})
  .then(response => {
    if (response.ok) {
      console.log('PHP script executed successfully');
      // Handle the response if needed
    } else {
      console.error('PHP script execution failed');
    }
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });


	}
</script>
</body>
</html>

