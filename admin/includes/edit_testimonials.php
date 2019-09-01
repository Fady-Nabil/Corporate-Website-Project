<?php
   if(isset($_GET['p_id'])) {
    $the_testimonial_id = $_GET['p_id'];
    $query = "SELECT * FROM testimonials WHERE testimonials_id = $the_testimonial_id";
    $select_testimonials_id = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_testimonials_id)) {
        $testimonials_id       = $row['testimonials_id'];
        $testimonials_name     =  $row['testimonials_name'];
        $testimonials_position = $row['testimonials_position'];
        $testimonials_desc     = $row['testimonials_desc'];
        $testimonials_image    = $row['testimonials_image'];

        if(isset($_POST['update_testimonials'])) {
            $testimonials_name = $_POST['testimonials_name'];
            $testimonials_position = $_POST['testimonials_position'];
            $testimonials_desc = $_POST['testimonials_desc'];
            $testimonials_image =  $_FILES['image']['name'];
            $testimonials_image_temp = $_FILES['image']['tmp_name'];
            move_uploaded_file($testimonials_image_temp,"../img/team/$testimonials_image");

            if(empty($testimonials_image)) {
                $query = "SELECT * FROM testimonials WHERE testimonials_id = $the_testimonial_id";
                $select_image = mysqli_query($connection,$query);
                while($row = mysqli_fetch_array($select_image)) {
                    $testimonials_image = $row['testimonials_image'];
                }
            }
            $query = "UPDATE testimonials SET ";
            $query .="testimonials_name  = '{$testimonials_name}',";
            $query .="testimonials_position  = '{$testimonials_position}',";
            $query .="testimonials_desc  = '{$testimonials_desc}',";
            $query .="testimonials_image = '{$testimonials_image}' ";
            $query .= "WHERE testimonials_id = {$the_testimonial_id} ";
            $update_testimonials = mysqli_query($connection,$query);
            confirm_query($update_testimonials);
            echo "<div class='alert alert-success' role='alert'>Testimonial Updated:</div>";
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="work_name"><b>Testimonials Name</b></label>
                <input class="form-control" type="text" name="testimonials_name" value="<?php echo $testimonials_name; ?>">
            </div> 
            <div class="form-group">
                <label for="work_name"><b>Testimonials Position</b></label>
                <input class="form-control" type="text" name="testimonials_position" value="<?php echo $testimonials_position; ?>">
            </div> 
            <div class="form-group">
                <label for="work_name"><b> Testimonial Description </b></label>
                <textarea  cols="10" rows="5" class="form-control" type="text" name="testimonials_desc"><?php echo $testimonials_desc; ?></textarea>
            </div> 
            <div class="form-group">
                <label for="image"><b>Testimonials Image</b></label>
                <img width="100" src="../img/team/<?php echo $testimonials_image; ?>" alt="">
                <input class="form-control" type="file" name="image">
            </div> 
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update_testimonials" value="Edit Testimonails">
            </div>
        </form>
        <?php
    }
}
?>
