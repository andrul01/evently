
<?php
    include 'includes/config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $username = $row['username'];
    echo "
        <tr>
            <td>$id</td>
            <td>$username</td>
            <td>
                <a href='edit.php?id=$id' class='text-success me-2' title='Edit'>
                    <i class='fas fa-edit'></i>
                </a>
                <a href='delete.php?id=$id' class='text-danger' title='Delete' onclick='return confirm(\"Are you sure?\")'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </td>
        </tr>";
}
?>