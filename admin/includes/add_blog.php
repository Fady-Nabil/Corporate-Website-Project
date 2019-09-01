<?php
    if (isset($_POST['create_blog'])) {
        $blog_team_id = $_POST['blog_team'];
        $blog_title = $_POST['blog_title'];
        $blog_content = $_POST['blog_content'];
       
        $blog_image = $_FILES['image']['name'];
        $blog_image_temp = $_FILES['image']['tmp_name'];

        $blog_date = date('d-m-y');
        
        move_uploaded_file($blog_image_temp,"../img/blog/$blog_image");
        $query = "INSERT INTO blog (blog_team_id,blog_title,blog_content,blog_image,blog_date)";
        $query .= "VALUES({$blog_team_id},'{$blog_title}','{$blog_content}','{$blog_image}',now())";
        $create_blog_query = mysqli_query($connection,$query);
        confirm_query($create_blog_query);
        echo "<div class='alert alert-success' role='alert'>Post Created:</div>";
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="blog_team"><b>Post Team</b></label>
        <select class="form-control" name="blog_team" id="">
            <option value="">Select Options:</option>
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
        <label for="blog_title"><b>Post Title</b></label>
        <input class="form-control" type="text" name="blog_title">
    </div>
    <div class="form-group">
        <label for="blog_content"><b>Post Content</b></label>
        <textarea  cols="20" rows="5" class="form-control" type="text" name="blog_content"></textarea>
    </div>
    <div class="form-group">
        <label for="image"><b>Post Image</b></label>
        <input class="form-control" type="file" name="image">
    </div> 
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_blog" value="Add Post">
    </div>
</form>