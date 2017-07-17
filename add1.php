<?php

$name="";
$age = "";
$address="";
$num="";
$id=0;
$edit_state=false;

$db=mysqli_connect('localhost','root','goldtree9','test');

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $num = $_POST['num'];

    $query = "INSERT INTO sample (name,age,address,num) VALUES ('$name','$age',$address','$num')";
    mysqli_query($db, $query);
    header('location: index.php');
    
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $num = $_POST['num'];

    mysqli_query($db, "UPDATE sample SET name='$name',age='$age',address=$address',num='$num' WHERE id=$id");
    $_SESSION['msg'] = "Record Updated";
    header('location: index.php');
    
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM smaple WHERE id=$id");
    $_SESSION['msg']="Record Deleted";
    header('location: index.php');
}

$results = mysqli_query($db, "SELECT * FROM sample");

?>