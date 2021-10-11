<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>

    <style>
        *{
            font-family: Verdana,Geneva,Tahoma, san-serif;
        }
     </style>
</head>
<body>
<?php require 'menu.php'; ?>
<h1>Associative ARRAY</h1>

    <?php
    $peserta = [
        'nama' => 'Ali ',
        'umur' => '16',
        'jantina' => 'Lelaki',
    ];
    ?>

    <table>
        <tr>
            <td>Nama : </td>
            <td><?php echo $peserta['nama']; ?></td>
        </tr>

        <tr>
            <td>Umur : </td>
            <td><?php echo $peserta['umur']; ?></td>
        </tr>

        <tr>
            <td>Jantina : </td>
            <td><?php echo $peserta['jantina']; ?></td>
        </tr>
    </table>
</body>
</html>