<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/footer.php"; ?>

<?php
    updateTable();
?>

    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
            <form class="" action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"class="form-control">
                </div>
                <div class="">
                    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
                </div>
                <div class="form-group">
                    <select class="" name="id" id="">
                        <?php showAllData(); ?>
                        <option value=""></option>
                    </select>
                </div>
            </form>
        </div>
    </div>
