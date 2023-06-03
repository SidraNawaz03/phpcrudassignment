<?php
include 'config/db.php';

$sql = "select * from students";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <div class="contianer">
        <table>
            <tr>
                <th> ID </th>
                <th> Roll Number </th>
                <th> First Name </th>
                <th> Last Name </th>
                <th> Gender </th>
                <th> Fee </th>
                <th> Operation </th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['roll_num']; ?> </td>
                        <td> <?php echo $row['f_name']; ?> </td>
                        <td> <?php echo $row['l_name']; ?> </td>
                        <td> <?php echo $row['gender']; ?> </td>
                        <td> <?php echo $row['fee']; ?> </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" style="margin-left: 10px" >Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>

        <br> <br>

        <div class="controls">
            <a class="btn btn-default" href="add.php" >Add New</a>
        </div>

    </div>

    <script src="" async defer></script>

</body>

</html>