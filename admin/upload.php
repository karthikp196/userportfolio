<?php
    include('config.php');

   if(isset($_POST['submit'])){
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTempName = $_FILES['file']['tmp_name'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];
      $fileExt = explode('.', $fileName);
      $allowed = array('jpg','jpej','png','pdf');
      $fileSize = $_FILES['file']['size'];
      $imagePath ="uploads/".$fileName;
      $id="1";
      $user_id = $_SESSION['id'];
      echo $user_id;
      
      
      if(($fileSize>8000000)){
           echo "filesize is too large";
      }
      else {
          if(move_uploaded_file($fileTempName,$imagePath))
          {
             $sql= "UPDATE image_upload SET img_dir='$imagePath', image_name='$fileName',img_size='$fileSize' WHERE id='$id'";
             $res= mysqli_query($conn,$sql);
             echo "image inserted into tables";

          }
          else {
              echo "there was an error in uploading file";
          }
      }

     
   }

   else {
       echo "no";
   }


?>