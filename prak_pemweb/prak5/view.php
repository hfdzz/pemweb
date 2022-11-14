<?php
    include "connection.php";
    $sql = "";
    if (isset($_POST["filter"])) {
        $filter = $_POST["filter"];
        $sql = "SELECT * FROM mahasiswa WHERE prodi = '$filter'";
    }
    if($sql !== ""):
        $result = mysqli_query($con, $sql);
        $i = 0;
        while($data = mysqli_fetch_array($result)):
            $i++;
?>

        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nim"] ?></td>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["prodi"] ?></td>
        </tr>

<?php
        endwhile;
    endif;
?>