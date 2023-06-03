<?php
include 'config/db.php';

//$rollnum = '';
if( isset( $_GET['add-form'] ) )
{
    $rollnum = $_GET['rollnumber'];
    $f_name = $_GET['f_name'];
    $l_name = $_GET['l_name'];
    $gender = $_GET['gender'];
    $fee = $_GET['fee'];

   $sql = "insert into students (roll_num, f_name, l_name, gender, fee) Values 
   ('" . $rollnum . "','" . $f_name . "','" . $l_name . "','" . $gender . "','" . $fee . "')";

    if($sql){
        $result = $conn->query($sql);
        if ($result) {
            $id = $conn->insert_id;
            
            header( 'Location: /dashboard.php');
            exit;
        }
    }
}


?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="input-form">
            <h2 class="header">Student data</h2>
            <h4>Please enter your information</h4>
            <form action="">

                <div class="field-group">
                    <lable>Roll Number</label>
                        <input type="text" name="rollnumber" placeholder="rollnumber"/>
                </div>

                <div class="field-group">
                    <lable>First Name</label>
                        <input type="text" name="f_name" placeholder="first name"/>
                </div>

                <div class="field-group">
                    <lable>Last Name</label>
                        <input type="text" name="l_name" placeholder="last name"/>
                </div>

                <div class="field-group">
                    <lable>Gender</label>
                        <input type="text" name="gender" placeholder="gender"/>
                </div>

                <div class="field-group">
                    <lable>Fee</label>
                        <input type="text" name="fee" placeholder="fee"/>
                </div>

                <div class="field-group">
                    <input type="submit" name="add-form" value="ADD" />
                </div>

            </form>
        </div>
    </body>
</html>