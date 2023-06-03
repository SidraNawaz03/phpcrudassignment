<?php
    include "config/db.php";

    $row = array(
        'roll_num' => '',
        'f_name' => '',
        'l_name' => '',
        'gender' => '',
        'fee' => '',
    );
    
    if ( isset($_GET['edit-form'])){
        $rollnum = $_GET['rollnumber'];
        $f_name = $_GET['f_name'];
        $l_name = $_GET['l_name'];
        $gender = $_GET['gender'];
        $fee = $_GET['fee'];
        $update_id = $_GET['id'];

        $sql = "update students SET roll_num='" . $rollnum . "',  f_name='" 
        . $f_name . "', l_name='" . $l_name . "', gender='" . $gender . "', fee='" . $fee . "'
         where id=" . $update_id;

        if($sql){
            $result = $conn->query($sql);
            if ($result) {
                header( 'Location: /dashboard.php');
                exit;
            }
        }
    }

    else{
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
    
            if ($id) {

                $sql = "select * from students where id=" . $id;
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                }
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
                        <input type="text" name="rollnumber" value="<?php echo $row['roll_num']; ?>"/>
                </div>

                <div class="field-group">
                    <lable>First Name</label>
                        <input type="text" name="f_name" value="<?php echo $row['f_name']; ?>"/>
                </div>

                <div class="field-group">
                    <lable>Last Name</label>
                        <input type="text" name="l_name" value="<?php echo $row['l_name']; ?>"/>
                </div>

                <div class="field-group">
                    <lable>Gender</label>
                        <input type="text" name="gender" value="<?php echo $row['gender']; ?>"/>
                </div>

                <div class="field-group">
                    <lable>Fee</label>
                        <input type="text" name="fee" value="<?php echo $row['fee']; ?>"/>
                </div>

                <div class="field-group">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input type="submit" name="edit-form" value="Edit" />
                </div>

            </form>
        </div>
    </body>
</html>