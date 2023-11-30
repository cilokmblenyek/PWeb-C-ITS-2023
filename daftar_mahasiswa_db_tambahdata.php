    <head>

    </head>
    <?php
    include("_functions.php");
    $act = isset($_GET['a']) ? $_GET['a'] : "";

    if ($act == "i") {
        $new_nrp = $_POST['innrp'];
        $new_nama = $_POST['innama'];
        //MASUKKAN DATA PAKE DML
        $sql = "INSERT INTO mahasiswa (nrp, nama) VALUE ('$new_nrp', '$new_nama');";

        $conn = dbconn();
        $result = mysqli_query($conn, $sql);
        echo ("data berhasil disimpan");
        mysqli_close($conn);
    }
    ?>
    <form method="post" action="?a=i">
        <table style="width:auto" border="1">
            <tr>
                <th>NRP</th>
                <td>
                    <input name="innrp" type="text">
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><input name="innama" type="text"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Tambah</button>
                </td>
            </tr>
        </table>
    </form>