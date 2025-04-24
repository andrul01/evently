<?php
include 'includes/config.php';

$sql = "SELECT * FROM cart ORDER BY oid DESC";
$result = mysqli_query($conn, $sql);

while ($row = $result->fetch_assoc()) {
    $oid = $row['oid'];
    $vid = $row['vid'];
    $username = $row['vname'];
    $odate = $row['odate'];
    $status = ucfirst($row['status']); // Make first letter capital

    echo "
        <tr>
            <td>$oid</td>
            <td>$vid</td>
            <td>$username</td>
            <td>$odate</td>
            <td>$status</td>
            <td>
                <a href='update-order.php?oid=$oid' class='text-success me-2' title='Update Status'>
                    <i class='fas fa-edit'></i>
                </a>
                <a href='delete-order.php?oid=$oid' class='text-danger' title='Delete' onclick='return confirm(\"Are you sure you want to delete this order?\")'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </td>
        </tr>";
}
?>
