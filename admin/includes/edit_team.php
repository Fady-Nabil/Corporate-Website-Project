<?php
   if(isset($_GET['p_id'])) {
    $the_team_id = $_GET['p_id'];
    $query = "SELECT * FROM team WHERE team_id = $the_team_id";
    $select_team_id = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_team_id)) {
        $team_id = $row['team_id'];
        $team_name = $row['team_name'];
        $team_position = $row['team_position'];
        $team_desc = $row['team_desc'];
        $team_image = $row['team_image'];
        $team_facebook = $row['team_facebook'];
        $team_twitter = $row['team_twitter'];
        $team_linkedin = $row['team_linkedin'];

        if(isset($_POST['update_team'])) {
            $team_name = $_POST['team_name'];
            $team_position = $_POST['team_position'];
            $team_desc = $_POST['team_desc'];
            $team_image =  $_FILES['image']['name'];
            $team_image_temp = $_FILES['image']['tmp_name'];
            $team_facebook = $_POST['team_facebook'];
            $team_twitter = $_POST['team_twitter'];
            $team_linkedin = $_POST['team_linkedin'];
            move_uploaded_file($team_image_temp,"../img/team/$team_image");

            if(empty($team_image)) {
                $query = "SELECT * FROM team WHERE team_id = $the_team_id";
                $select_image = mysqli_query($connection,$query);
                while($row = mysqli_fetch_array($select_image)) {
                    $team_image = $row['team_image'];
                }
            }
            $query = "UPDATE team SET ";
            $query .="team_name  = '{$team_name}', ";
            $query .="team_position = '{$team_position}', ";
            $query .="team_desc = '{$team_desc}', ";
            $query .="team_image = '{$team_image}', ";
            $query .="team_facebook   = '{$team_facebook}', ";
            $query .="team_twitter = '{$team_twitter}', ";
            $query .="team_linkedin  = '{$team_linkedin}' ";
            $query .= "WHERE team_id = {$the_team_id} ";
            $update_team = mysqli_query($connection,$query);
            confirm_query($update_team);
            echo "<div class='alert alert-success' role='alert'>Member Updated:</div>";
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="team_name"><b>Member Name</b></label>
                <input class="form-control" type="text" name="team_name" value="<?php echo $team_name ?>">
            </div> 
            <div class="form-group">
                <label for="team_position"><b>Member Position</b></label>
                <input class="form-control" type="text" name="team_position" value="<?php echo $team_position; ?>">
            </div> 
            <div class="form-group">
                <label for="team_desc"><b>Member Description</b></label>
                <textarea cols="10" rows="5" class="form-control" type="text" name="team_desc"><?php echo $team_desc; ?></textarea>
            </div>
            <div class="form-group">
                <label for="image"><b>Member Image</b></label>
                <img width="100" src="../img/team/<?php echo $team_image; ?>" alt="">
                <input class="form-control" type="file" name="image">
            </div> 
            <div class="form-group">
                <label for="team_facebook"><b>Member Facebook</b></label>
                <input class="form-control" type="text" name="team_facebook" value="<?php echo $team_facebook; ?>">
            </div> 
            <div class="form-group">
                <label for="team_twitter"><b>Member Twitter</b></label>
                <input class="form-control" type="text" name="team_twitter" value="<?php echo $team_twitter; ?>">
            </div> 
            <div class="form-group">
                <label for="team_linkedin"><b>Member LinkedIn</b></label>
                <input class="form-control" type="text" name="team_linkedin" value="<?php echo $team_linkedin; ?>">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update_team" value="Edit Member">
            </div>
        </form>
        <?php
    }
}
?>
