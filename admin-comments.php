<?php

?>

<title>Admin Panel Comments</title>
<link rel="stylesheet" href="style.css">

<div class="position-admin">
    <div class="admin-header">
        <div class="admin-header-item-section">
            <ul>
                <div class="head-admin">Admin Panel</div>
                <div class="item-head-admin"><li><a href="admin-users.php">Users</a></li></div>
                <div class="item-head-admin"><li><a href="admin-posts.php">Posts</a></li></div>
                <div class="item-head-admin"><li><a href="admin-categories.php">Categories</a></li></div>
                <div class="item-head-admin"><li><a href="admin-comments.php">Comments</a></li></div>
                <div class="item-head-admin"><li><a href="admin-tags.php">Tags</a></li></div>
                <div class="item-head-admin"><li><a href="admin-contact.php">Contact supp</a></li></div>
                <div class="item-head-admin"><li><a href="logout.php">Logout</a></li></div>
            </ul>
        </div>
    </div>
    <div class="position-table">
        <div class="table-sup">
            <div class="title-table">Comments Table</div>

            <form method="get" action="admin-contact.php">
                <label for="search">Find Message</label>
                <input type="text" id="search" name="search" value="<?php echo htmlspecialchars($searchQuery); ?>" />
                <button type="submit">Search</button>
            </form>

            <table>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Text</th>
                    <th>Post Id</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . htmlspecialchars($row['author_name']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['text']) . '</td>';
                        echo '<td>' . $row['post_id'] . '</td>';
                        echo '<td>' . $row['date'] . '</td>';
                        echo '<td>' . $row['is_moderate'] . '</td>';
                        echo '<td><a href="delete-comment.php?id=' . $row['id'] . '">Delete</a> || <a href="moderate-comment.php?id=' . $row['id'] . '">Accept</a></td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">No comment found</td></tr>';
                }
                ?>
            </table>

            <div class="pagination">
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo '<a class="pagination-butt" href="admin-comments.php?page=' . $i . ($searchQuery ? '&search=' . $searchQuery : '') . '"';
                    if ($i == $page) echo ' class="active"';
                    echo '>' . $i . '</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
$conn->close();
?>
