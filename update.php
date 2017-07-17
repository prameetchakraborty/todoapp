<html>
    <head>
        <title> API</title>
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <script>
        $(document).ready(function(){
            $('#update').click(function(e){
                e.preventDefault();
            $.ajax({
                url: "updateclient.php",
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
<form method="post">
<table class="table" cellpadding="5" cellspacing="5">
<tr><th>ID</th>
<td><input type="text" value="<?= $_GET['id']; ?>" id="id" name="id">
</td></tr>
<tr><th>Name</th>
<td><input type="text" value="<?= $_GET['name']; ?>" id="name" name="name">
</td></tr>
<tr><th>Email</th>
<td><input type="text" value="<?= $_GET['mail']; ?>" id="mail" name="mail">
</td></tr>
<tr><th>Phone</th>
<td><input type="text" value="<?= $_GET['phone']; ?>" id="phone" name="phone">
</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="update" class="btn btn-success" id="update" value="Update">
</td></tr>

</table></form>
</body>
</html>