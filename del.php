<?php 
include "dbcon.php";
if(isset($_GET["action"]) && $_GET["action"]='del'){
        $id= $_GET['id'];
        $q = "DELETE FROM users WHERE id = $id";
        $r = mysqli_query($con, $q);
        if(!$r){
            die(mysqli_error($con));
        }else{
            $action = "del";
            
        }
        header ("location:index.php");
    }
?>