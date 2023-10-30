<?php 
/*$nrp = array("0001", "0002", "0003", "0004", "0005");
$nama =  array("A","B","C","D","E");*/

//connect database
$conn=mysqli_connect("localhost", "root", "" ,"dbpweb");
if(!$conn){
    die("koneksi error");
}

$sql = "SELECT * from mahasiswa";
$result = mysqli_query($conn,$sql);

$i = 0;
while($row = mysqli_fetch_array($result)){
    $nrp[$i] = $row['nrp'];
    $nama[$i] = $row['nama'];
    $i++;
}

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