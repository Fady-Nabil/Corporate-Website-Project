<?php
    if (isset($_POST['create_services'])) {
        $services_name = $_POST['services_name'];
        $services_desc = $_POST['services_desc'];
       
        $query = "INSERT INTO services(services_name,services_desc)";
        $query .= "VALUES('{$services_name}','{$services_desc}')";
        $create_services_query = mysqli_query($connection,$query);
        confirm_query($create_services_query);
        //$the_post_id = mysqli_insert_id($connection);//this method get the last id registered
        echo "<div class='alert alert-success' role='alert'>post created:</a></div>";
    }
?>
<form action="" method="post">
    <div class="form-group">
        <label for="email"><b>Service Name</b></label>
        <input class="form-control" type="text" name="services_name">
    </div> 
    <div class="form-group">
        <label for="post_author"><b>Service Description</b></label>
        <textarea cols="20" rows="5" class="form-control" type="text" name="services_desc"></textarea>
    </div> 
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_services" value="Add Service">
    </div>
</form>