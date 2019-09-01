<?php
function confirm_query($query_result) {
    global $connection;
    if(!$query_result) {
        die('Query Failed'. mysqli_error($connection));
    }
}
/*function to insert links in database*/
function insert_links() {
    global $connection;
    if (isset($_POST['submit'])) {
        $link_name = $_POST['link_name'];
        if($link_name == "" || empty($link_name)) {
            echo "this filed shouldn't be empty";
        }
        else {
            $query = "INSERT INTO links (link_name)";
            $query .= "VALUE('{$link_name}')";
            $create_link_query = mysqli_query($connection, $query);
            if(!$create_link_query) {
                die('Query Failed'. mysqli_error($connection));
            }
        }
    }
}
/*this function use to include update links page when user click on edit link */
function include_update_links() {
    global $connection;
    if (isset($_GET['edit'])) {
        $cat_id = $_GET['edit'];
        include "includes/update_links.php";
    }
}
/*this function use to display all links */
function find_all_links() {
    global $connection;
    $query = "SELECT * FROM links";
    $select_links_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_links_query)) {
        $link_id = $row['link_id'];
        $link_name = $row['link_name'];
        echo "<tr>";
            echo "<td>{$link_id}</td>";
            echo "<td>{$link_name}</td>";
            echo "<td><a class='btn btn-success btn-xs' href='links.php?edit={$link_id}'>Edit</a></td>";
            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" class='btn btn-danger btn-xs' href='links.php?delete={$link_id}'>Delete</a></td>";
        echo "</tr>";
    }
}
/*this function use to delete link that user selected */
function delete_links() {
    global $connection;
    if(isset($_GET['delete'])) {
        $the_link_id = $_GET['delete'];
        $query = "DELETE FROM links WHERE link_id = {$the_link_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location:links.php");
    }
}
?>