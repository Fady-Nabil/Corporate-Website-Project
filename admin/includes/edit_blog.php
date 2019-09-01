<?php
   if(isset($_GET['p_id'])) {
    $the_blog_id = $_GET['p_id'];
    $query = "SELECT * FROM blog WHERE blog_id = $the_blog_id";
    $select_blog_id = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_blog_id)) {
        $blog_id         = $row['blog_id'];
        $blog_team_id    = $row['blog_team_id'];
        $blog_title      = $row['blog_title'];
        $blog_content    = $row['blog_content'];
        $blog_image      = $row['blog_image'];
        $blog_date       = $row['blog_date'];

        if(isset($_POST['update_blog'])) {
            $blog_team_id    = $_POST['blog_team'];
            $blog_title      = $_POST['blog_title'];
            $blog_content    = $_POST['blog_content'];
        
            $blog_image =  $_FILES['image']['name'];
            $blog_image_temp = $_FILES['image']['tmp_name'];
            move_uploaded_file($blog_image_temp,"../img/blog/$blog_image");

            if(empty($blog_image)) {
                $query = "SELECT * FROM blog WHERE blog_id = $the_blog_id";
                $select_image = mysqli_query($connection,$query);
                while($row = mysqli_fetch_array($select_image)) {
                    $blog_image = $row['blog_image'];
                }
            }
            $query = "UPDATE blog SET ";
            $query .="blog_team_id  = '{$blog_team_id}',";
            $query .="blog_title  = '{$blog_title}',";
            $query .="blog_content  = '{$blog_content}',";
            $query .="blog_image = '{$blog_image}' ";
            $query .= "WHERE blog_id = {$the_blog_id} ";
            $update_blog = mysqli_query($connection,$query);
            confirm_query($update_blog);
            echo "<div class='alert alert-success' role='alert'>Post Updated:</div>";
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="blog_team"><b>Post Team</b></label>
                <select class="form-control" name="blog_team" id="">
                    <?php
                    $query = "SELECT * FROM team";
                    $select_team_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_team_query)) {
                        $team_id     = $row['team_id'];
                        $team_name   = $row['team_name'];
                        echo "<option value='$team_id'>$team_name</option>";
                    }//end while
                    ?>            
                </select>
            </div>
            <div class="form-group">
                <label for="work_name"><b>Post Title</b></label>
                <input class="form-control" type="text" name="blog_title" value="<?php echo $blog_title; ?>">
            </div> 
            <div class="form-group">
                <label for="blog_content"><b>Post Content</b></label>
                <textarea  cols="20" rows="5" class="form-control" type="text" name="blog_content"><?php echo $blog_content; ?></textarea>
            </div> 
           
            <div class="form-group">
                <label for="image"><b>Post Image</b></label>
                <img width="100" src="../img/blog/<?php echo $blog_image; ?>" alt="">
                <input class="form-control" type="file" name="image">
            </div> 
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update_blog" value="Edit Post">
            </div>
        </form>
        <?php
    }
}
?>
