<?php
    if (isset($_POST['create_testimonials'])) {
        $testimonials_name = $_POST['testimonials_name'];
        
        $testimonials_image = $_FILES['image']['name'];
        $testimonials_image_temp = $_FILES['image']['tmp_name'];

        $testimonials_position = $_POST['testimonials_position'];
        $testimonials_desc = $_POST['testimonials_desc'];
    
        move_uploaded_file($testimonials_image_temp,"../img/team/$testimonials_image");
        $query = "INSERT INTO testimonials (testimonials_name,testimonials_position,testimonials_desc,testimonials_image)";
        $query .= "VALUES('{$testimonials_name}','{$testimonials_position}','{$testimonials_desc}','{$testimonials_image}')";
        $create_testimonials_query = mysqli_query($connection,$query);
        confirm_query($create_testimonials_query);
        echo "<div class='alert alert-success' role='alert'>Testimonials Created:</div>";
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="workname"><b>testimonial Name</b></label>
        <input class="form-control" type="text" name="testimonials_name">
    </div>
    <div class="form-group">
        <label for="image"><b>testimonial Image</b></label>
        <input class="form-control" type="file" name="image">
    </div> 
    <div class="form-group">
        <label for="workname"><b>testimonial Position</b></label>
        <input class="form-control" type="text" name="testimonials_position">
    </div>
    <div class="form-group">
        <label for="workname"><b>testimonial Description</b></label>
        <textarea cols="10" rows="5" class="form-control" type="text" name="testimonials_desc"></textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_testimonials" value="Add testimonial">
    </div>
</form>