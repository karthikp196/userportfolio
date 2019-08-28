<?php
    include('config.php');
   
    $message = array();

    if(isset($_POST['user']) && isset($_POST['pass'])) 
    {
        $user = $_POST['user'];
        $password = $_POST['pass'];
        $sql = "SELECT * FROM users where username='$user' and password ='$password'";
        $res = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($res);

       if($num == 1)
       {      
          while($row=mysqli_fetch_array($res))
          {
              $_SESSION['id']= $row['id'];
          }
              $message['is_error']=0;
              $message['msg']= "authentication successfull";
        }
        else
        {
           $message['is_error']=1;
           $message['msg']="invalid username or password";
        }
        echo json_encode($message);   
    }
    
    elseif(isset($_POST['fname'])&& (isset($_POST['lname'])) && isset($_POST['role']) && (isset($_POST['id'])))
    {
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $role = $_POST['role'];
        $id = $_POST['id'];
        $sql = "UPDATE name SET firstname='$fname',lastname='$lname',position='$role' ";
        $res = mysqli_query($conn,$sql);
        $message['msg']= "details successfully updated";
        echo json_encode($message);
    
    }

    elseif(isset($_POST['intro']) && isset($_POST['introb']) && isset($_POST['details'])){
        $intro = $_POST['intro'];
        $introb = $_POST['introb'];
        $details = mysqli_real_escape_string($conn,$_POST['details']);

        //$sql = "UPDATE introsection SET intro='$intro',introbelow='$introb',details='$details' WHERE id=1 ";
         $sql = "UPDATE `introsection` SET `intro`='$intro',`introbelow`='$introb' ,details='$details'";
        $res = mysqli_query($conn,$sql);
        echo "details updated successfully";

        
    }

    elseif(isset($_POST['skill_name'])&& isset($_POST['skill_level']) && isset($_POST['skill_id']))
    {
        $skill = $_POST['skill_name'];
        $value=$_POST['skill_level'];
        $id = $_POST['skill_id'];

        $sql = "UPDATE skilltable SET skill='$skill', skillvalue='$value' WHERE id='$id'";
        $res = mysqli_query($conn,$sql);

        $query = ("SELECT * FROM skilltable");
        $result = mysqli_query($conn,$query);

        $message = array();
        $i = 0;

        while($row = mysqli_fetch_array($result))
        {
            $message['result'][$i]['skill_id'] = $row['id'];
            $message['result'][$i]['skill'] = $row['skill'];
            $message['result'][$i]['skillvalue'] = $row['skillvalue'];

            $i++;
        }

        echo json_encode($message);

    }
   
    elseif(isset($_POST['newskill'])&&isset($_POST['newvalue']))
    {
        
        $newskill =$_POST['newskill'];
        $newvalue = $_POST['newvalue'];

        $sql = "INSERT INTO skilltable (skill,skillvalue) VALUES ('$newskill','$newvalue')";
        $res = mysqli_query($conn,$sql);

        echo "newskill updated successfully";
    }

    elseif(isset($_POST['deleteid']))
    {
        $deleteid= $_POST['deleteid'];
        $sql ="DELETE FROM skilltable WHERE id='$deleteid'";
        $res = mysqli_query($conn,$sql);
        echo "skill successfully deleted";
    }

    elseif(isset($_POST['id'])&& isset($_POST['exptitle']) && isset($_POST['expdetail'])){
        $exptitle= $_POST['exptitle'];
        $id=$_POST['id'];
        $expdetail=$_POST['expdetail'];
        
        $sql= "UPDATE experience SET title='$exptitle', alldetails='$expdetail' WHERE id='$id'";
        $res= mysqli_query($conn,$sql);

        echo "experience details updated successfully";
    }
    elseif(isset($_POST['dlt_id'])){
        $dlt_id = $_POST['dlt_id'];

        $sql= "DELETE FROM experience WHERE id='$dlt_id' ";
        $res=mysqli_query($conn,$sql);

        echo "experiences deleted success fully";

    }

    elseif(isset($_POST['newext']) && isset($_POST['newexd'])){
        $newext = $_POST['newext'];
        $newexd = $_POST['newexd'];
        
        $sql = "INSERT INTO experience (title,alldetails) VALUES ('$newext','$newexd')";
        $res=mysqli_query($conn,$sql);

        echo "experience details added success fully";
    }

    elseif(isset($_POST['fb_id'])){
        
        $fbid= $_POST['fb_id'];
        
        $sql ="UPDATE social_links SET facebook='$fbid'";
        $res=mysqli_query($conn,$sql);

        echo "facebook link successfully updated";
    }

    elseif(isset($_POST['tw_id'])){
        
        $twid= $_POST['tw_id'];
        
        $sql ="UPDATE social_links SET twitter='$twid'";
        $res=mysqli_query($conn,$sql);

        echo "twitter link successfully updated";
    }

    elseif(isset($_POST['dr_id'])){
        
        $drid= $_POST['dr_id'];
        
        $sql ="UPDATE social_links SET dribble='$drid'";
        $res=mysqli_query($conn,$sql);

        
        echo "dribble link successfully updated";
    }

    elseif(isset($_POST['bh_id'])){
        
        $bhid= $_POST['bh_id'];
        
        $sql ="UPDATE social_links SET behance='$bhid'";
        $res=mysqli_query($conn,$sql);

        echo "behance link successfully updated";
    }

    elseif(isset($_POST['lk_id'])){
        
        $lkid= $_POST['lk_id'];
        
        $sql ="UPDATE social_links SET linkdin='$lkid'";
        $res=mysqli_query($conn,$sql);

        echo "linkedin link successfully updated";
    }

    elseif(isset($_POST['title_c']) && isset($_POST['hire_c']) && isset($_POST['location_c']) && isset($_POST['email_c']) && isset($_POST['phone_c']) && isset($_POST['web_c']) ){
      
        $title_c = $_POST['title_c'];
        $hire_c = $_POST['hire_c'];
        $location_c = $_POST['location_c'];
        $email_c = $_POST['email_c'];
        $phone_c = $_POST['phone_c'];
        $web_c = $_POST['web_c'];
      
        $sql = "UPDATE contact_footer SET c_title='$title_c', c_hire='$hire_c' , c_location='$location_c',c_email='$email_c', c_phone='$phone_c', c_web='$web_c' ";

        $res = mysqli_query($conn,$sql);

        echo "all detial updated successfully";
       

    }



?>

