<?php include('./components/header.php') ?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $student_query = 'SELECT * FROM users';
        $student_result = mysqli_query($conn, $student_query);

        foreach ($student_result as $users) {
        ?>
            <tr>
                <td><?php echo $users['id'] ?></td>
                <td><?php echo $users['firstname'] ?></td>
                <td><?php echo $users['middlename'] ?></td>
                <td><?php echo $users['lastname'] ?></td>
                <td><a href="user_edit.php?user_id=<?php echo $users['id'] ?>">Edit</a></td>
                <td><a href="code.php?user_id=<?php echo $users['id'] ?>">Delete</a></td>
            </tr>
        <?php
        }

        ?>
    </tbody>
</table>

<?php include('./components/footer.php') ?>