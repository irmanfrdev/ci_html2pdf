<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laporan PDF</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <H2 class="center">Laporan Data Pengguna</H2>
    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php foreach ($pengguna as $row): ?>
            <tr>
                <td class="center"><?php echo ++$no; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td class="center"><?php echo $row->no_hp; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>