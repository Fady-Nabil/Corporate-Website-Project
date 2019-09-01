<?php
    if(isset($_GET['u_id'])) {
        $the_user_id = $_GET['u_id'];
        $query = "SELECT * FROM users WHERE user_id = $the_user_id";
        $select_users_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_users_query)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['user_password'];
            $user_role = $row['user_role'];

            if (isset($_POST['update_user'])) {
                $username = $_POST['username'];
                $user_password = $_POST['user_password'];
                //$post_image = $_FILES['image']['name'];
               // $post_image_temp = $_FILES['image']['tmp_name'];
                //move_uploaded_file($post_image_temp,"../images/$post_image");

                /*
                this query I use it to crypt password to help user
                when edit his password and display the original password that he entered when 
                he register in website.  
                */
                $query = "SELECT randSalt FROM users";
                $select_randsalt_query = mysqli_query($connection,$query);
                $row = mysqli_fetch_array($select_randsalt_query);
                $salt = $row['randSalt'];
                $hashed_passord = crypt($user_password,$salt);

                $query = "UPDATE users SET ";
                $query .="username  = '{$username}', ";
                $query .="user_password = '{$hashed_passord}', ";
                $query .="user_role  = '{$user_role}' ";
                $query .= "WHERE user_id = {$the_user_id} ";
                $update_user_query = mysqli_query($connection,$query);
                confirm_query($update_user_query);
                echo "<div class='alert alert-success' role='alert'>User Updated</a></div>";
            }//(isset($_POST['update_user']))
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
                        <option value="<?php echo $user_role ?>"><?php echo $user_role ?></option>
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
                    <input class="btn btn-primary" type="submit" name="update_user" value="Update User">
                </div>
            </form>
            <?php
        }//while
    }//if(isset($_GET['u_id']))
    
    
?>
