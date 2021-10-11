<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $ntah = [
        'Pembekal' => [
            'tarikh' => '01-10-2021',
            'perkara' => 'Pembekal',
            'masuk' => 100,
            'keluar' => 0,
            'baki' => 100,
        ],
        'CBR Enterprise' => [
            'tarikh' => '03-10-2021',
            'perkara' => 'CBR Enterprise',
            'masuk' => 0,
            'keluar' => 30,
            'baki' => 70,
        ]
    ];

    ?>
    <table border="1" cellspacing="0">
        <tr>
            <th>Bil</th>
            <th>Tarikh</th>
            <th>Perkara</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Baki</th>
        </tr>
        <?php
        $bill = 1;
        foreach ($ntah as $customer) {
        ?>
            <tr>
                <td><?php echo $bill++; ?></td>
                <td><?php echo $customer['tarikh']; ?></td>
                <td><?php echo $customer['perkara']; ?></td>
                <td><?php echo $customer['masuk']; ?></td>
                <td><?php echo $customer['keluar']; ?></td>
                <td><?php echo $customer['baki']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>