<?php

    $db=new mysqli("localhost","root","goldtree9","test");
    
    $id = $_POST['id'];
    
    $str= "DELETE FROM mytable WHERE id = '$id'";

    if($db->query($str)){
        echo "Successfully Deleted";
    }
    else
    {
        echo mysql_error();
    }

?>