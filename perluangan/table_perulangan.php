<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .cellmerah {
            background-color: red;
            color: yellow
        }
        .cellijo {
            background-color: green; 
            color: white
        }
    </style>
    <title>Table perluangan</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0" align="center" style="margin-top: 200px">
    
    <!-- php -->
     <!-- <?php
        for($a = 1; $a <= 7; $a++) {
            echo "<tr>";
            for($b = 1; $b <= 5; $b++) {
                if ($b % 2 == 1) {
                    echo "<td>$a,$b</td>";
                } else { 
                    echo "<td>$a,$b</td>";
                }
            }
            echo "</tr>";
        }
     ?> -->
    
    <!-- html -->
        <?php for($a = 1; $a <= 9; $a++): ?>
            <tr align="center">
                <?php for($b = 1; $b <= 12; $b++): ?>
                    <?php if($a % 2 == 0): ?> 
                        <td class="cellmerah"><?= "$a,$b"; ?></td>
                    <?php elseif($b % 2 == 0): ?>
                        <td class="cellmerah"><?= "$a,$b"; ?></td>
                    <?php else:?>
                        <td class=""><?= "$a,$b";?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>