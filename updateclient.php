<?php

    $db=new mysqli("localhost","root","goldtree9","test");
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];

    $str= "UPDATE mytable SET name = '$name', mail = '$mail', phone = '$phone' WHERE id = '$id'";

    if($db->query($str)){
        echo "Successfully Updated";
    }
    else
    {
        echo mysql_error();
    }

?>