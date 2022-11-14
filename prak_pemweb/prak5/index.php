

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <label>Prodi <select id="s-select" name="prodi">
        <option value="" disabled hidden selected="selected">Pilih Prodi</option>
        <option value="IF">Teknik Informatika</option>
        <option value="KL">Teknik Kelautan</option>
        <option value="TI">Teknik Industri</option>
        <option value="SF">Farmasi</option>
    </select></label>
    <table border="1"">
        <thead>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </thead>
        <tbody id="t-body">

        </tbody>
    </table>
</body>
<script>
    $(document).ready(function() {
        $("#t-body").load("view.php");
        $("#s-select").change(function() {
            var filter = $(this).val();
            $.ajax({
                url: "view.php",
                method: "POST",
                data: {filter: filter},
                success: function(data) {
                    $("#t-body").html(data);
                }
            });
        });
    });
</script>
</html>