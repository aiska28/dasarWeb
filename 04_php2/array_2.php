<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        caption {
            caption-side: top;
            font-size: 1.3em;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis Kelamin' => 'Perempuan'
        ];

        echo "<table>";
        echo "<caption>Data Dosen</caption>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        foreach ($Dosen as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
