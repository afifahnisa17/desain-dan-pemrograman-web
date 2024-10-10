<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
        }

        th, td{
            padding: 10px;
            border: 1px solid #ddd;
        }

        th{
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td{
            background-color: #fafafa;
        }

        tr:hover{
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'];

    ?>
    <table>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama'];?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili'];?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin'];?></td>
        </tr>
    </table>
</body>
</html>