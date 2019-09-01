<form method="post">
    <table class="table table-bordered table-hover">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Blog Team</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //find and show all posts query
        $query = "SELECT * FROM blog";
        $select_blog = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_blog)) {
            $blog_id       = $row['blog_id'];
            $blog_team_id  = $row['blog_team_id'];
            $blog_title    = $row['blog_title'];
            $blog_content  = $row['blog_content'];
            $blog_image    = $row['blog_image'];
            $blog_date     = $row['blog_date'];
            echo "<tr>";
                echo "<td>{$blog_id}</td>";
                $query = "SELECT * FROM team WHERE team_id = $blog_team_id";
                $select_blog_id = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_blog_id)) {
                    $team_id = $row['team_id'];
                    $team_name = $row['team_name'];
                } 
                echo "<td>{$team_name}</td>";
                echo "<td>{$blog_title}</td>";
                echo "<td>{$blog_content}</td>";
                echo "<td><img width= '100' class='img-responsive' src='../img/blog/{$blog_image}' alt='image'></td>"; 
                echo "<td>{$blog_date}</td>";
                echo "<td><a class='btn btn-success btn-xs' href='blog.php?source=edit_blog&p_id={$blog_id}'>Edit</a></td>";
                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" class='btn btn-danger btn-xs' href='blog.php?delete={$blog_id}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    if(isset($_GET['delete'])) {
        $the_blog_id = $_GET['delete'];
        $query = "DELETE FROM blog WHERE blog_id = {$the_blog_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location:blog.php");
    }
    ?>
</form>