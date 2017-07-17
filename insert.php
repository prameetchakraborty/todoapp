<html>
    <head>
        <title> API</title>
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.info {
  margin: 65px auto 0;
  margin-top: 550px;
  margin-left: 550px;
  position:relative;
  color: gray;
  font-size: 15px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  text-align: left;
}

.info p {
  line-height: 1;
}

</style>
     <script>
        $(document).ready(function(){
            $('#insert').click(function(e){
                e.preventDefault();
            $.ajax({
                url: "add.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(msg) {
                    $('#message').text(msg)
                }
            })
            })

            $('#load').click(function(e){
                e.preventDefault();
            $.ajax({
                url: "view.php",
                dataType: "html",
                success: function(Result) {
                    $('#result').html(Result)
                }
            })
            })


        })
        </script>
        <body>
        <p class="h2 text-warning" align="center">CRUD APPLICATION</p>
            <p id="message"></p>
            <div class="col-md-4 col-md-offset-4 panel panel-default ">
            <form method="post">
                <table class="table table-striped" cellpadding="5" cellspacing="5">
                    <tr><th>Name </th><td><input type="text" id="name" name="name"> </td></tr>
                    <tr><th>Email </th><td><input type="text" id="mail" name="mail"> </td></tr>
                    <tr><th>Phone </th><td><input type="text" id="phone" name="phone"> </td></tr>
                <tr><td colspan="2" align="center"><input type="submit" class="btn btn-success" name="insert" id="insert"></td></tr>
                <tr><td colspan="4" align="center"><input type="submit" name="load" id="load" class="btn btn-info" value="View"></td></tr>
                
                </table>
            </form>
            
        </div>
        <div id="result"></div>

        <div class="info">
            <p>Made with <span style="font-size:130%;"> &hearts; </span> by Prameet Chakraborty </p>
        </div>
    </body>
</html>