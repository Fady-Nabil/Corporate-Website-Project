<?php
    if (isset($_POST['create_work'])) {
        $work_name = $_POST['work_name'];
        
        $work_image = $_FILES['image']['name'];
        $work_image_temp = $_FILES['image']['tmp_name'];

       

        move_uploaded_file($work_image_temp,"../img/portfolio/$work_image");
        $query = "INSERT INTO works (work_name,work_image)";
        $query .= "VALUES('{$work_name}','{$work_image}')";
        $create_works_query = mysqli_query($connection,$query);
        confirm_query($create_works_query);
        echo "<div class='alert alert-success' role='alert'>Project Added:</div>";
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="workname"><b>Project Name</b></label>
        <input class="form-control" type="text" name="work_name">
    </div>
    <div class="form-group">
        <label for="image"><b>Project Image</b></label>
        <input class="form-control" type="file" name="image">
    </div> 
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_work" value="Add Project">
    </div>
</form>