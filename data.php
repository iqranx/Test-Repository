<?php require  ,'connection.php'?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>
<body>

<table bordr = 1 cellspacing = 0 cellpadding = 10>
    <tr>
    <td> # </td>
    <td> Name</td>
    <td>Image </td>
</tr>

<?php
$i = 1;
$rows = mysqli_query($conn, "SELECT * FOORM tb-upload ORDER BY id DESC");
?>

<?php foreach($rows as $row) : ?>
    
    <tr>
        <td> <?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td> <img src="img/ <?php echo $row["image"]; ?>" alt=""> </td>
</tr>

</table>
    
</body>
</html>