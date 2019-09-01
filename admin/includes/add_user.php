<?php
    if (isset($_POST['create_user'])) {
        $username = $_POST['username'];
        $user_password = $_POST['user_password'];
        $user_role = $_POST['user_role'];
        $randsalt = '$2y$10$alotofstringstoencrptmypassord';
        $query = "INSERT INTO users(username,user_password,user_role,randsalt)";
        $query .= "VALUES('{$username}','{$user_password}','{$user_role}','{$randsalt}')";
        $ceate_user_query = mysqli_query($connection,$query);
        //confirm_query($ceate_user_query);
        echo "<div class='alert alert-success' role='alert'>user created: ". " " . " <a href='users.php'>View users</a></div>";
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username"><b>Username</b></label>
        <input class="form-control" type="text" name="username">
    </div> 
    <div class="form-group">
        <label for="user_email"><b>Password</b></label>
        <input class="form-control" type="password" name="user_password">
    </div> 
    <div class="form-group">
        <label for="user_role"><b>User Role</b></label>
        <select class="form-control" name="user_role" id="">
        <option value="subscriber">Select options :</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>
</form>