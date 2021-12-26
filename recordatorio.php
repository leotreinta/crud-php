<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incrustar php en html</title>

    <script>
        <?php
           echo "alert('saludo leito')";
        ?>
    </script>

</head>
<body>
    <h2>curso php</h2>
    <?php echo "render2web" ?>

    <?php  
        print "<h4>titulo h4</h4>";
        echo '<hr>';

    ?>

    <h4>
    <?php  
        print "titulo h4";
        echo '<hr>';

    ?>
    
    </h4>

    <h2 style="color: blue;">texto azul</h2>

    <h2 <?php echo 'style="color:blue;"'?> >holi</h2>

</body>
</html