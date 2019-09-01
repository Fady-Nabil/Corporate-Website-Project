<form method="post">
    <table class="table table-bordered table-hover">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //find and show all posts query
        $query = "SELECT * FROM works";
        $select_works = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_works)) {
            $work_id = $row['work_id'];
            $work_name = $row['work_name'];
            $work_image = $row['work_image'];
            echo "<tr>";
                echo "<td>{$work_id}</td>";
                echo "<td>{$work_name}</td>";
                echo "<td><img width= '100' class='img-responsive' src='../img/portfolio/{$work_image}' alt='image'></td>"; 
                echo "<td><a class='btn btn-success btn-xs' href='works.php?source=edit_works&p_id={$work_id}'>Edit</a></td>";
                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" class='btn btn-danger btn-xs' href='works.php?delete={$work_id}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    if(isset($_GET['delete'])) {
        $the_work_id = $_GET['delete'];
        $query = "DELETE FROM works WHERE work_id = {$the_work_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location:works.php");
    }
    ?>
</form>