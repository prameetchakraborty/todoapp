<html>
    <head>
        <title> API</title>
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    
<body>

<?php

    $db=new mysqli("localhost","root","goldtree9","test");
    
    $str = "SELECT * FROM mytable";

    echo "<table class=table table-striped cellpadding=10 cellspacing=10><tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    </tr>";

    if($data = $db->query($str)) {
        while($row=$data->fetch_assoc()){
            echo "<tr><td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[mail]</td>
            <td>$row[phone]</td>
            <td><a class='btn btn-primary' href='update.php?id=$row[id]&name=$row[name]&mail=$row[mail]&phone=$row[phone]''>Update</a></td>
           <td><a class='btn btn-danger' href='del.php?id=$row[id]&name=$row[name]&mail=$row[mail]&phone=$row[phone]''>Delete</a></td>
            </tr>";
        }
    }
        else {
            echo mysql_error();
        }
?>

</body>
</html>