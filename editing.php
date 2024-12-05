<?php 
    // echo "you arrive edit page";
    include "dbcon.php";


    // $name     = $email    =$mobile = $password=""; 
    if(isset($_GET['action']) &&  $_GET['action']==  'edit'  ){
        $id = $_GET["id"];
        
        $q="SELECT * FROM users WHERE id= ".$id;
        $r = mysqli_query($con,$q);
        if($r){
            $current_user = mysqli_fetch_assoc($r);
            $name =$current_user['name'];
            $email =$current_user['email'];
            $mobile =$current_user['mobile'];
            $password =$current_user['password'];            
        }
        
        
    }
        if(isset($_POST["update"])){
            $id = $_POST['id'] ;
            $name1     = $_POST["name"];
            $email1   = $_POST["email"];
            $mobile1   = $_POST["mobile"];
            $password1 = $_POST["password"];        
            $q ="UPDATE users SET 
            name ='$name1', 
            email='$email1',  
            mobile='$mobile1', 
            password='$password1' 
            WHERE id=$id";
            $r = mysqli_query($con,$q);
            header("location:index.php");
    }
    ?>