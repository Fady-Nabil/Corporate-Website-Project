<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<?php 
//login query
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password  = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}' AND user_role = 'admin' ";
    $select_user_query = mysqli_query($connection, $query);
    //confirm_query($select_user_query);
    while($row = mysqli_fetch_array($select_user_query)) {
        $db_user_id        =  $row['user_id'];
        $db_username       =  $row['username'];
        $db_user_password  =  $row['user_password'];
        $db_user_role      =  $row['user_role'];    
    }
    /*
    if($username !== $db_username && $password !== $db_user_password) {
        header("Location: ../index.php");
    } else if ($username == $db_username && $password == $db_user_password) {
        $_SESSION['username']   = $db_username;
        $_SESSION['firstname']  = $db_user_firstname;
        $_SESSION['lastname']   = $db_user_lastname; 
        $_SESSION['user_role']  = $db_user_role;  
        header("Location: ../admin/index.php");
    } else {
        header("Location: ../index.php");
    }
    */

    if($username === $db_username && $password === $db_user_password) {
        $_SESSION['username']   = $db_username;
        $_SESSION['user_role']  = $db_user_role; 

        header("Location: admin/index.php");
    } else {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
}
?>
<!-- Login -->
<div class="col-md-5 col-md-offset-4 text-center">
    <h4>Login</h4>
    <form action="login.php" method="post">
        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Enter username">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Enter password">
        </div>
        <div class="form-group">
            <button class="btn btn-primary form-control" name="login" type="submit">Login</button>
        </div>
    </form><!--search form -->
    <!-- /.input-group -->
</div>
<?php include "includes/footer.php"; ?>