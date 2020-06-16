<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Sistem Informasi Rumah Sakit</p>
    <table>
    <th>no_rm</th>
    <th>Nama</th>
    <th>Tipe Pasien</th>
    <th>Alamat</th>
    <?php foreach ($pasien as $key => $value) { ?>
    <tr>
        <td><?php echo $value->no_rm;?></td>
        <td><?php echo $value->name;?></td>
        <td><?php echo $value->tipe_pasien;?></td>
        <td><?php echo $value->alamat;?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>