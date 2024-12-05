<?php 
include "dbcon.php";
$q = "SELECT * FROM users";
$all_users =mysqli_query($con , $q);
// $user =    $all_users->fetch_assoc();
while($user =mysqli_fetch_assoc($all_users)){?>

    <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['mobile']; ?></td>
        <td>
            <div class="d-flex p-2 d-flex justify-content-between  mb-2">
            <i onclick="confirm_delete(<?php echo $user['id'];?>)" class="text-danger"  data-feather="trash-2"></i>
            <i onclick="edit(<?php echo $user['id'];?>);" class="text-success" data-feather="edit" ></i>
            </div>
        </td>

    </tr>


<?php
}

?>