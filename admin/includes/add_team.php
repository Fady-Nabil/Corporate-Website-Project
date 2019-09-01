<?php
    if (isset($_POST['create_team'])) {
        $team_name = $_POST['team_name'];
        $team_position = $_POST['team_position'];
        $team_desc = $_POST['team_desc'];

        $team_image = $_FILES['image']['name'];
        $team_image_temp = $_FILES['image']['tmp_name'];

        $team_facebook = $_POST['team_facebook'];
        $team_twitter = $_POST['team_twitter'];
        $team_linkedin = $_POST['team_linkedin'];

        move_uploaded_file($team_image_temp,"../img/team/$team_image");
        $query = "INSERT INTO team (team_name,team_position,team_desc,team_image,team_facebook,team_twitter,team_linkedin)";
        $query .= "VALUES('{$team_name}','{$team_position}','{$team_desc}','{$team_image}','{$team_facebook}','{$team_twitter}','{$team_linkedin}')";
        $create_team_query = mysqli_query($connection,$query);
        confirm_query($create_team_query);
        echo "<div class='alert alert-success' role='alert'>Member created:</div>";
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="team_name"><b>Member Name</b></label>
        <input class="form-control" type="text" name="team_name">
    </div>
    <div class="form-group">
        <label for="team_position"><b>Member Position</b></label>
        <input class="form-control" type="text" name="team_position">
    </div>
    <div class="form-group">
        <label for="team_position"><b>Member Description</b></label>
        <textarea cols="10" rows="5" class="form-control" type="text" name="team_desc"></textarea>
    </div>
    <div class="form-group">
        <label for="image"><b>Member Image</b></label>
        <input class="form-control" type="file" name="image">
    </div> 
    <div class="form-group">
        <label for="team_facebook"><b>Member FaceBook</b></label>
        <input class="form-control" type="text" name="team_facebook">
    </div> 
    <div class="form-group">
        <label for="team_twitter"><b>Member Twitter</b></label>
        <input class="form-control" type="text" name="team_twitter">
    </div> 
    <div class="form-group">
        <label for="team_linkedin"><b>Member LinkedIn</b></label>
        <input class="form-control" type="text" name="team_linkedin">
    </div> 
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_team" value="Add Member">
    </div>
</form>