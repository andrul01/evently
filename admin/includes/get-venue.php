<?php
include 'includes/config.php';

$sql = "SELECT * FROM venue";
$result = mysqli_query($conn, $sql);

while ($row = $result->fetch_assoc()) {
    $vid = $row['vid'];
    $vname = $row['vname'];
    $vimage = $row['vimage'];
    $vdesc = $row['vdesc'];
    $vprice = $row['vprice'];

    echo "
        <tr>
            <td>$vid</td>
            <td>$vname</td>
            <td><img src='images/$vimage' alt='$vname' style='width: 100px; height: auto;'></td>
            <td>$vdesc</td>
            <td>₹$vprice</td>
            <td>
                <a href='edit-venue.php?id=$vid' class='text-success me-2' title='Edit'>
                    <i class='fas fa-edit'></i>
                </a>
                <a href='delete-venue.php?id=$vid' class='text-danger' title='Delete' onclick='return confirm(\"Are you sure you want to delete this venue?\")'>
                    <i class='fas fa-trash-alt'></i>
                </a>
            </td>
        </tr>";
}
?>
