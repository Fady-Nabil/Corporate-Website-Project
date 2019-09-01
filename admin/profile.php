<?php include "includes/admin_header.php"; ?>
<?php
    //first select the admin user that you want to edit
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $query = "SELECT * FROM users WHERE username = '{$username}'";
        $select_user_profile_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($select_user_profile_query)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['user_password'];
            $user_role = $row['user_role'];
        }
    }
?>
<?php
    //second update this admin user
    if (isset($_POST['edit_profile'])) {
        $user_role = $_POST['user_role'];
        $username = $_POST['username'];
        $user_password = $_POST['user_password'];
        //$post_image = $_FILES['image']['name'];
       // $post_image_temp = $_FILES['image']['tmp_name'];
        //move_uploaded_file($post_image_temp,"../images/$post_image");
        $query = "UPDATE users SET ";
        $query .="username  = '{$username}', ";
        $query .="user_password = '{$user_password}', ";
        $query .="user_role  = '{$user_role}' ";
        $query .= "WHERE username = '{$username}' ";
        $update_user_query = mysqli_query($connection,$query);
        confirm_query($update_user_query);
        
    }//end if
?>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>
                                <?php echo $_SESSION['username'] ?>
                            </small>
                        </h1>
                        <?php 
                        if(isset($_POST['edit_profile'])) {
                            echo "<div class='alert alert-success' role='alert'>Profile Updated</a></div>";
                        }
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username"><b>Username</b></label>
                                <input class="form-control" type="text" name="username" value="<?php echo $username ?>">
                            </div> 
                            <div class="form-group">
                                <label for="user_email"><b>Password</b></label>
                                <input class="form-control" type="password" name="user_password" value="<?php echo $user_password ?>">
                            </div> 
                            <div class="form-group">
                                <label for="user_role"><b>User Role</b></label>
                                <select class="form-control" name="user_role" id="">
                                    <option value="subscriber"><?php echo $user_role ?></option>
                                    <?php 
                                    if($user_role == 'admin') {
                                        echo "<option value='subscriber'>subscriber</option>";
                                    } else {
                                        echo "<option value='admin'>admin</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="edit_profile" value="Update Profile">
                            </div>
                        </form>
                    <?php
                    
                    ?>   
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

<?php include "includes/admin_footer.php"; ?>