<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="css/toaster.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Users Info</title>
</head>
<body> 
    <div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 d-flex justify-content-between  mb-2">
                <h2>All Users</h2>
                <div><a href="adding.php"><i data-feather="user-plus"></i> </a></div>
            </div>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include "display.php";?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/bootstrap.min.js">   </script>
    <script src="js/icons.js">   </script>
    <script src="js/toaster.js">   </script>
    <script src="js/jq.js">   </script>
    <script src="js/main.js">   </script>

    <?php
    include "del.php";
    $action =false;
    if($action !=false){
        if($action =="add"){?>
            <script>
                show_add()
            </script>
        <?php
        }
        if($action == "del"){?>
            <script>
                show_del()
            </script>   
        <?php
        
        }
        if($action == "edit"){?>
            <script>
                edit()
            </script>   
        <?php
        
        } 
    }    
    ?>
    <script> 
        feather.replace(); 
    </script>
</body>
</html>