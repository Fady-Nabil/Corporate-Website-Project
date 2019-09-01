<?php
   if(isset($_GET['p_id'])) {
    $the_work_id = $_GET['p_id'];
    $query = "SELECT * FROM works WHERE work_id = $the_work_id";
    $select_work_id = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_work_id)) {
        $work_id = $row['work_id'];
        $work_name = $row['work_name'];
        $work_image = $row['work_image'];

        if(isset($_POST['update_work'])) {
            $work_name = $_POST['work_name'];
            $work_image =  $_FILES['image']['name'];
            $work_image_temp = $_FILES['image']['tmp_name'];
            move_uploaded_file($work_image_temp,"../img/team/$work_image");

            if(empty($work_image)) {
                $query = "SELECT * FROM works WHERE work_id = $the_work_id";
                $select_image = mysqli_query($connection,$query);
                while($row = mysqli_fetch_array($select_image)) {
                    $work_image = $row['work_image'];
                }
            }
            $query = "UPDATE works SET ";
            $query .="work_name  = '{$work_name}', ";
            $query .="work_image = '{$work_image}' ";
            $query .= "WHERE work_id = {$the_work_id} ";
            $update_work = mysqli_query($connection,$query);
            confirm_query($update_work);
            echo "<div class='alert alert-success' role='alert'>Project Updated:</div>";
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="work_name"><b>Project Name</b></label>
                <input class="form-control" type="text" name="work_name" value="<?php echo $work_name ?>">
            </div> 
            <div class="form-group">
                <label for="image"><b>Member Image</b></label>
                <img width="100" src="../img/portfolio/<?php echo $work_image; ?>" alt="">
                <input class="form-control" type="file" name="image">
            </div> 
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update_work" value="Edit Project">
            </div>
        </form>
        <?php
    }
}
?>
