<html>
    <head>
        <title>TODO PHP</title>
        
        </head>
    <body>
        <?php
        session_start();
        if(!isset($_SESSION['TodoCollection']))
        
            $_SESSION['TodoCollection']=array();
        ?>
        <form action="store.php" method="post">
            Todo Item:<input type="text" placeholder="Enter the task" name="item"a/>
            <input type="submit"/>
        </form>
        <ul>
            <?php for($i=0;$i < sizeof( $_SESSION['TodoCollection']);$i++)
            { ?>
            <li>
                <?php echo $_SESSION['TodoCollection'][$i]['caption']; ?>
                <button id="del">X</button></li>
            <?php 
            } ?>
            <script>
            document.getElementbyId('del')=function() {
                unset($_SESSION['TodoCollection'][$i]);

            }
            </script>
        </ul>
    </body>
</html>