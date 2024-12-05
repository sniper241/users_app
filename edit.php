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
            $name    = $_POST["name"];
            $email   = $_POST["email"];
            $mobile   = $_POST["mobile"];
            $password = $_POST["password"];        
            $q ="UPDATE users SET 
            name ='$name', 
            email='$email',  
            mobile='$mobile', 
            password='$password' 
            WHERE id=$id";
            $r = mysqli_query($con,$q);
            header("location:index.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Update user</title>
</head>

<body>
    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 d-flex justify-content-between">
                <h2>Update user</h2>
                <div><a href="index.php"><i data-feather="corner-down-left"></i> </a></div>
            </div>
            <form action="edit.php" method="POST">
                <div class="mb_3">
                    <label for="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $name;?>" class="form-control" autocomplete="false" placeholder="Enter your name">
                </div>
                <div class="mb_3">
                    <label for="form-label">Email</label>
                    <input type="email" name="email"  value="<?php echo $email;?>" class="form-control" autocomplete="false" placeholder="Enter your email">
                </div>
                <div class="mb_3">
                    <label for="form-label">Password</label>
                    <input type="password" name="password" value="<?php echo $password;?>" class="form-control" autocomplete="false" placeholder="Enter your password">
                </div>
                <div class="mb_3">
                    <label for="form-label">Tel</label>
                    <input type="tel" name="mobile"  value="<?php echo $mobile;?>" class="form-control" autocomplete="false"placeholder="Enter your mobile ">
                </div>


                <?php 
                if(isset($_GET['id'])){?>
                    <input type="hidden" name ='id' value="<?php echo $_GET['id'] ;?>">

                <?php }
                ?>

                <div class="mb_3">
                    <input type="submit" value="update" name="update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js">   </script>
    <script src="js/icons.js">   </script>
    <script> feather.replace(); </script>
</body>
</html>



