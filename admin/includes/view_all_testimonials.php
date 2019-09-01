<form method="post">
    <table class="table table-bordered table-hover">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Position</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //find and show all posts query
        $query = "SELECT * FROM testimonials";
        $select_testimonials = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_testimonials)) {
            $testimonials_id       = $row['testimonials_id'];
            $testimonials_name     = $row['testimonials_name'];
            $testimonials_image    = $row['testimonials_image'];
            $testimonials_position = $row['testimonials_position'];
            $testimonials_desc     = $row['testimonials_desc'];
            echo "<tr>";
                echo "<td>{$testimonials_id}</td>";
                echo "<td>{$testimonials_name}</td>";
                echo "<td><img width= '100' class='img-responsive' src='../img/team/{$testimonials_image}' alt='image'></td>"; 
                echo "<td>{$testimonials_position}</td>";
                echo "<td>{$testimonials_desc}</td>";
                echo "<td><a class='btn btn-success btn-xs' href='testimonials.php?source=edit_testimonials&p_id={$testimonials_id}'>Edit</a></td>";
                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" class='btn btn-danger btn-xs' href='testimonials.php?delete={$testimonials_id}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    if(isset($_GET['delete'])) {
        $the_testimonail_id = $_GET['delete'];
        $query = "DELETE FROM testimonials WHERE testimonials_id = {$the_testimonail_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location:testimonials.php");
    }
    ?>
</form>