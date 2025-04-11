<?php include('./components/header.php') ?>


<div>
    <h3>Create User</h3>
    <form action="code.php" method="POST">
        <div>
            <label>firstname</label>
            <input type="text" name="firstname">
        </div>
        <div>
            <label>middlename</label>
            <input type="text" name="middlename">
        </div>
        <div>
            <label>lastname</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <button type="submit" name="btn_submit_user">submit</button>
        </div>
    </form>

</div>


<?php include('./components/footer.php') ?>