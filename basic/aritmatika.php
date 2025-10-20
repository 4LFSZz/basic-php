<!-- aritmatika -->
<!-- <html>
<body>
    <?php

    $a = 15;
    $b = 30;
    $c = 45;

    $a = $b + 1 * $c;
    $b = $a * $c;
    $c = 15 + $b;

    print "nilai a:" . $a;
    print "<br>nilai b:" . $b;
    print "<br>nilai c:" . $c;

    ?>
</body>
</html> -->

<!-- php di dalam html -->
<!-- <html>
    <body>
        <h1><?php echo "Alfin zeta pramudya"?></h1> atau
        <?php echo "<h1>Alfin zeta pramudya<h1>"?>
    </body>
</html> -->

<!-- manggil variable di luar html -->
<?php
$nama = "Alfin zeta pramudya";
?>

<html>
    <body>
        <?php echo $nama?>
    </body>
</html>