<?php

    $db=new mysqli("localhost","root","goldtree9","test");
    
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];

    $strsql = "INSERT INTO mytable (name,mail,phone) VALUES ('$name','$mail','$phone')";

    if($db->query($strsql)){
        echo "Successfully Inserted";
    }
    else
    {
        echo mysql_error();
    }

?>