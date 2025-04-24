<?php
    include 'includes/config.php';
    $sql = "SELECT * FROM gallery";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()) {
    $gid = $row['gid'];
    $gname = $row['gname'];
    $gimage = $row['gimage'];
    echo "
        <tr>
            <td>$gid</td>
            <td>$gname</td>
            <td><img src='images/$gimage' alt='$gname' style='width: 100px; height: auto;'></td>
            <td>
                <a href='edit.php?id=$gid' class='text-success me-2' title='Edit'>
                    <i class='fas fa-edit'></i>
                </a>
                <a href='delete.php?id=$gid' class='text-danger' title='Delete' onclick='return confirm(\"Are you sure?\")'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </td>
        </tr>";
}
?>