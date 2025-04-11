<?php include('./components/header.php') ?>

<?php

$user_id = $_GET['user_id'];
$display_user = "SELECT * FROM users WHERE id=$user_id";
$user_result = mysqli_query($conn, $display_user);
$user = mysqli_fetch_assoc($user_result);


?>

<div>
    <h3>Edit User</h3>
    <form action="code.php" method="POST">
        <div>
            <label>firstname</label>
            <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
            <input type="text" name="firstname" value="<?php echo $user['firstname'] ?>">
        </div>
        <div>
            <label>middlename</label>
            <input type="text" name="middlename" value="<?php echo $user['middlename'] ?>">
        </div>
        <div>
            <label>lastname</label>
            <input type="text" name="lastname" value="<?php echo $user['lastname'] ?>">
        </div>
        <div>
            <button type="submit" name="btn_update_user">update</button>
        </div>
    </form>

</div>

<?php include('./components/footer.php') ?>