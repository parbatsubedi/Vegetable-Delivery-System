<?php
include '../database/connection.php';
include 'logincheck.php';
include 'admindashboard.php';
  $id=$_POST['id'];
  // echo $id;

  $sqlquery1= "SELECT * FROM `categories`where id=$id";
  // echo $sqlquery1;
  $result = mysqli_query($conn,$sqlquery1);
  $sn=0;
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name = $row['categories'];
    $date = $row['created_date'];
    $image = $row['image'];
    $description = $row['categories_description'];
  }
?>
 <link rel="stylesheet" href="./css/addproduct.css">
<title>Category Details</title>
<body>
<div class="container">
<h2 style="color:red">
	<?php
   if ($_SESSION['msg']!='')
   {

      echo $_SESSION['msg'];
      $_SESSION['msg']='';
   }
      ?>
	  </h2>
<form action="" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="Product">
  
    </h2>
      <label for="fname">categories Name:</label>
    </div>
    <div class="Product-fields">
    <input type="text" name="category_name" placeholder="categories name" value="<?php echo $name?>" required><br>
    </div>
  </div>

  <div class="row">
    <div class="Product">
      <label for="fname">created date</label>
    </div>
    <div class="Product-fields">
    <input type="date" name="created_date" placeholder="created_date" value="<?php echo $date?>" required ><br>
    </div>
  </div>

  
  <div class="row">
      <div class="Product">
        <label for="country">Image</label>
      </div>
      <div class="Product-fields">
        <input type="file" name="image" ><br><br>
        <img src="./images/categories/<?php echo $image; ?>" style="height:100px" alt="Product">
      </div>
  </div>

  
  <div class="row">
    <div class="Product">
      <label for="subject">Description</label>
    </div>
    <div class="Product-fields">
      <textarea id="subject" name="category_description" style="height:200px"><?php echo $description;?></textarea><br>
    </div>
  </div>
  <br>
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="row">
    <input type="submit" name="update" value="Update">
  </div>
    </form>
</div>

 <!-- php code to update the product -->

<?php
if(isset($_POST['update'])){
  $id=$_POST['id'];
    
      $category_name = $_POST['category_name'];
      $created_date = $_POST['created_date'];

      $image = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $p_image_folder = 'images/categories/'.$image;

      
      $category_description = $_POST['category_description'];

      $update = "UPDATE `categories` SET `categories`='$category_name',`created_date`='$created_date',`image`='$image',`categories_description`='$category_description' WHERE `categories`.`id`=$id";
      // echo $update;
        if($product=mysqli_query($conn,$update)){
        move_uploaded_file($file_tmp,$p_image_folder);
        
        $_SESSION['msg']="Edited information successfully";
        // header('location:viewcategory.php');
      }else{
        echo"not";
      }

    } 
?> 