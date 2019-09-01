<form method="post">
    <table class="table table-bordered table-hover">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //find and show all posts query
        $query = "SELECT * FROM services";
        $select_services = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_services)) {
            $services_id = $row['services_id'];
            $services_name = $row['services_name'];
            $services_desc = $row['services_desc'];
            echo "<tr>";
                echo "<td>{$services_id}</td>";
                echo "<td>{$services_name}</td>";
                echo "<td>{$services_desc}</td>";
                echo "<td><a class='btn btn-success btn-xs' href='services.php?source=edit_post&p_id={$services_id}'>Edit</a></td>";
                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" class='btn btn-danger btn-xs' href='services.php?delete={$services_id}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    if(isset($_GET['delete'])) {
        $the_services_id = $_GET['delete'];
        $query = "DELETE FROM services WHERE services_id = {$the_services_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location:services.php");
    }
    ?>
</form>