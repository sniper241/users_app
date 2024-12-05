<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Users App</title>
</head>

<body>
    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 d-flex justify-content-between">
                <h2>Add user</h2>
                <div><a href="index.php"><i data-feather="corner-down-left"></i> </a></div>
            </div>
            <form action="adding.php" method="POST">
                <div class="mb_3">
                    <label for="form-label">Name</label>
                    <input type="text" name="name" class="form-control" autocomplete="false" placeholder="Enter your name">
                </div>
                <div class="mb_3">
                    <label for="form-label">Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="false" placeholder="Enter your email">
                </div>

                
                <div class="mb_3">
                    <label for="form-label">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="false" placeholder="Enter your password">
                </div>

                <div class="mb_3">
                    <label for="form-label">Tel</label>
                    <input type="tel" name="mobile" class="form-control" autocomplete="false"placeholder="Enter your mobile ">
                </div>

                <div class="mb_3">
                    <input type="submit" value="Save" name="save" class="btn btn-primary">
                </div>
            </form>
                <?php
                include "dbcon.php";
                $action = false;
                if(isset($_POST["save"])){
                $name     = $_POST["name"];
                $email    = $_POST["email"];
                $mobile   = $_POST["mobile"];
                $password = $_POST["password"];
                
                $q ="INSERT INTO users (name ,email, password ,mobile)
                    VALUES('$name','$email','$password','$mobile')";
                    $r = mysqli_query($con, $q);
                    if(!$r){
                        die(mysqli_error($con));
                    }else{
                        $action = "add";
                        header ("location:index.php");
                    }
                }

                ?>
        </div>
    </div>
    <script src="js/bootstrap.min.js">   </script>
    <script src="js/icons.js">   </script>
    <script> feather.replace(); </script>
</body>
</html>



