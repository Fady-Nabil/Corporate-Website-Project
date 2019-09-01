<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Role</th>
            <th>change</th>
            <th>change</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    //find and show all comments query
    $query = "SELECT * FROM users";
    $select_users = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_role = $row['user_role'];
        echo "<tr>";
            echo "<td>{$user_id}</td>";
            echo "<td>{$username}</td>";
            echo"<td>{$user_role}</td>";
            echo "<td><a class='btn btn-success btn-xs' href='users.php?change_to_admin=$user_id'>to admin</a></td>";
            echo "<td><a class='btn btn-danger btn-xs' href='users.php?change_to_sub=$user_id'>to sub</a></th>";
            echo "<td><a class='btn btn-success btn-xs' href='users.php?source=edit_user&u_id=$user_id'>Edit</a></th>";
            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" class='btn btn-danger btn-xs' href='users.php?delete=$user_id'>Delete</a></th>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<?php
//change to admin user query
if(isset($_GET['change_to_admin'])) {
    $the_user_id = $_GET['change_to_admin'];
    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = {$the_user_id}";
    $chang_to_admin_query = mysqli_query($connection,$query);
    header("Location:users.php");
}
//change to subscriber user query
if(isset($_GET['change_to_sub'])) {
    $the_user_id = $_GET['change_to_sub'];
    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = {$the_user_id}";
    $chang_to_subscriber_query = mysqli_query($connection,$query);
    header("Location:users.php");
}
//delete user query
if(isset($_GET['delete'])) {
    $the_user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
    $delete_query = mysqli_query($connection,$query);
    header("Location:users.php");
}
?>