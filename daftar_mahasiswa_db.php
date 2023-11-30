<?php
/*$nrp = array("0001", "0002", "0003", "0004", "0005");
$nama =  array("A","B","C","D","E");*/

/*
//connect database
$conn = mysqli_connect("localhost", "root", "" ,"dbpweb");
if(!$conn){
    die("koneksi error");
}
*/

include("_functions.php");
$conn = dbconn();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_nrp'])) {
    $delete_nrp = mysqli_real_escape_string($conn, $_POST['delete_nrp']);
    $sql_delete = "DELETE FROM mahasiswa WHERE nrp = '$delete_nrp'";
    mysqli_query($conn, $sql_delete);
}

$sql = "SELECT * from mahasiswa order by nama";
$result = mysqli_query($conn, $sql);

$i = 0;
while ($row = mysqli_fetch_array($result)) {
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
    <table style="width:auto" border="1">
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Delete</th>
        </tr>

        <?php for ($i = 0; $i < sizeof($nrp); $i++) { ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $nrp[$i]; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td>
                    <a href=""></a>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="hidden" name="delete_nrp" value="<?php echo $nrp[$i]; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>