<?php
require('config.php');

if (isset($_POST['btn_submit_user'])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];


    $insert_user = "INSERT INTO users(firstname, middlename, lastname) VALUES('$firstname', '$middlename', '$lastname')";
    $user_result = mysqli_query($conn, $insert_user);

    if ($user_result) {
        echo "Data Inserted.";
        header('Location: index.php');
        exit;
    } else {
        echo "failed insert";
        header('Location: index.php');
        exit;
    }
}

if (isset($_POST['btn_update_user'])) {
    $user_id = $_POST['user_id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];


    $insert_user = "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname ='$lastname'  WHERE id = $user_id";
    $user_result = mysqli_query($conn, $insert_user);

    if ($user_result) {
?>
        <script>
            alert('updated successfully!');
            window.location.href = "index.php"
        </script>

    <?php
    } else {
    ?>
        <script>
            alert('update failed');
            window.location.href = "index.php"
        </script>
    <?php
    }
}

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $delete_user = "DELETE FROM users WHERE id=$user_id";
    $user_result = mysqli_query($conn, $delete_user);

    if ($user_result) {
    ?>
        <script>
            alert('deleted successfully!');
            window.location.href = "index.php"
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('failed delete');
            window.location.href = "index.php"
        </script>

<?php
    }
}
