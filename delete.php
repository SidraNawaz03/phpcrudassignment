<?php
    include "config/db.php";

    if ( isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id=" . $id;

        if($sql){
            $result = $conn->query($sql);
        }
    }
    
    header( 'Location: /dashboard.php');
    exit;

?>