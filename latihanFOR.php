<!DOCTYPE html>
<html>
<head>
    <title>BELAJAR</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for($i = 1; $i <= 3; $i++) { ?>
        <tr>
            <?php for($j = 1; $j <= 7; $j++) { ?>
                <td> <?php echo "$i,$j"; ?></td>
            <?php } ?>
        </tr>
        <?php } ?>

</table>

</body>
</html>