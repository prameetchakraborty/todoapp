<html>
    <head>
        <title> API</title>
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <script>
        $(document).ready(function(){
            $('#delete').click(function(e){
                e.preventDefault();
            $.ajax({
                url: "delclient.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(msg) {
                    $('#message').text(msg)
                }
            })
            })
            })
            </script>
</head>

<body>
<p id="message"></p>

<table class="table" cellpadding="5" cellspacing="5">
<tr><th>ID</th>
<td><?= $_GET['id']; ?>
</td></tr>
<tr><th>Name</th>
<td><?= $_GET['name']; ?>
</td></tr>
<tr><th>Email</th>
<td><?= $_GET['mail']; ?>
</td></tr>
<tr><th>Phone</th>
<td><?= $_GET['phone']; ?>
</td></tr>
<tr><td colspan="2" align="center">

</table>
<form method="post">
<input type="text" readonly="readonly" name="id" value="<?=$_GET['id'];?>">
<input class="btn btn-danger" type="submit" name="delete" id="delete" value="Delete">
</form>

</body>
</html>