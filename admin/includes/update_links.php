<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Edit Link </label>
    <?php
    /*update query*/
    // first part select the id that you want to edit it
    if(isset($_GET['edit'])) {
        $link_id = $_GET['edit'];
        $query = "SELECT * FROM links WHERE link_id = $link_id";
        $select_links_id = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_links_id)) {
            $link_id = $row['link_id'];
            $link_name = $row['link_name'];
            ?>
            <input value="<?php if(isset($link_name)) {echo $link_name;} ?>" class="form-control" type="text" name="link_name">              
            <?php
        }
    }
    ?>
    <?php
    //second part after selecting the id then update it
    // update query
    if(isset($_POST['update_link'])) {
        $the_link_name = $_POST['link_name'];
        $query = "UPDATE links SET link_name = '{$the_link_name}' WHERE link_id = {$link_id}";
        $update_query = mysqli_query($connection,$query);
        if(!$update_query) {
            die('Query Failed'. mysqli_error($connection));
        }
        //header("Location:categories.php");
    }
    ?>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_link" value="Update Link">
    </div>
</form>