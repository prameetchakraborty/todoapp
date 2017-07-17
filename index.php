<?php include('add1.php'); 
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM sample WHERE id=$id");
    $record=mysqli_fetch_array($rec);
    $name=$record['name'];
    $age=$record['age'];
    $address=$record['address'];
    $num=$record['num'];
    $id=$record['id'];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD APP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">            
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
    function clearform()

    {
        document.getElementById("name").value="";
        document.getElementById("age").value="";
        document.getElementById("address").value="";
        document.getElementById("num").value="";
    }
    </script>
    </head>
    <style>
        .input label{
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-raius: 5px;
            border: 1px solid gray;
        }
        .msg {
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
            color: #3c763d;
            background: #dff0d8;
            width: 50%;
            text-align: center;
        }
        btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }
    form {
        width: 45%;
        margin: 50px auto;
        text-align: left;
        padding: 20px;
        border: 1px solid #bbbbbb;
        border-radius: 5px;
    }
    .del_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #800000;
    }
    .edit_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #2E8B57;
    }
    </style>
</html>
<body>
    <?php if(isset($_SESSION['msg'])): ?>
    <div class="msg">
    <?php 
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    ?>
    </div>
    <?php endif ?>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Number</th>
                <th colspan="2">Action</</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row=mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['num'];?></td>
                <td><a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a class="del_btn" href="add1.php?del=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>


            <?php } ?>
            
        </tbody>
    </table>

    <form method="post" class="form-group" action="add1.php">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="input">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>

        <div class="input">
            <label>Age</label></label>
            <input type="text" name="age" value="<?php echo $age; ?>">
        </div>

        <div class="input">
            <label>Address</label></label>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>

        <div class="input">
            <label>Number</label></label>
            <input type="text" name="num" value="<?php echo $num; ?>">
        </div>

        <div class="input">
            <?php if($edit_state==false): ?>
            
            <button type="submit" name="save" class="btn btn-primary" onclick="clearform();">Save</button>
            
            <?php else: ?>
            <button type="submit" name="update" class="btn" onclick="clearform();">Update</button>
            <?php endif ?>
        </div>
    </form>
</body>
</html>