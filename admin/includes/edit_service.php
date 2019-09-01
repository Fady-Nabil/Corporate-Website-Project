<?php
   if(isset($_GET['p_id'])) {
    $the_service_id = $_GET['p_id'];
    $query = "SELECT * FROM services WHERE services_id = $the_service_id";
    $select_services_id = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_services_id)) {
        $services_id = $row['services_id'];
        $services_name = $row['services_name'];
        $services_desc = $row['services_desc'];
    
        if(isset($_POST['update_sevice'])) {
            $services_name = $_POST['services_name'];
            $services_desc = $_POST['services_desc'];
    
            $query = "UPDATE services SET ";
            $query .="services_name = '{$services_name}', ";
            $query .="services_desc = '{$services_desc}'  ";
            $query .= "WHERE services_id = {$the_service_id} ";
            $update_services = mysqli_query($connection,$query);
            confirm_query($update_services);
            echo "<div class='alert alert-success' role='alert'>Services Updated:</div>";
        }
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="email"><b>Service Name</b></label>
                <input class="form-control" type="text" name="services_name" value="<?php echo $services_name; ?>">
            </div>  
            <div class="form-group">
                <label for="post_author"><b>Service Description</b></label>
                <textarea cols="20" rows="5" class="form-control" type="text" name="services_desc"><?php echo $services_desc; ?></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update_sevice" value="Edit Service">
            </div>
        </form>
        <?php
    }
}

?>
