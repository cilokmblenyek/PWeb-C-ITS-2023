<?php 
$nrp = array("0001", "0002", "0003", "0004", "0005");
$nama =  array("A","B","C","D","E");
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <table style="width:auto">
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Nama</th>
            </tr>

            <?php for($i = 0; $i<sizeof($nrp); $i++) { ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $nrp[$i]; ?></td>
                <td><?php echo $nama[$i]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>