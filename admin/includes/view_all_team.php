<form method="post">
    <table class="table table-bordered table-hover">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Image</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>LinkedIn</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //find and show all posts query
        $query = "SELECT * FROM team";
        $select_team = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_team)) {
            $team_id = $row['team_id'];
            $team_name = $row['team_name'];
            $team_position = $row['team_position'];
            $team_image = $row['team_image'];
            $team_facebook = $row['team_facebook'];
            $team_twitter = $row['team_twitter'];
            $team_linkedin = $row['team_linkedin'];
            echo "<tr>";
                echo "<td>{$team_id}</td>";
                echo "<td>{$team_name}</td>";
                echo "<td>{$team_position}</td>";
                echo "<td><img width= '100' class='img-responsive' src='../img/team/{$team_image}' alt='image'></td>"; 
                echo"<td>{$team_facebook}</td>";
                echo"<td>{$team_twitter}</td>";
                echo "<td>{$team_linkedin}</td>";
                echo "<td><a class='btn btn-success btn-xs' href='team.php?source=edit_team&p_id={$team_id}'>Edit</a></td>";
                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" class='btn btn-danger btn-xs' href='team.php?delete={$team_id}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    if(isset($_GET['delete'])) {
        $the_team_id = $_GET['delete'];
        $query = "DELETE FROM team WHERE team_id = {$the_team_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location:team.php");
    }
    ?>
</form>