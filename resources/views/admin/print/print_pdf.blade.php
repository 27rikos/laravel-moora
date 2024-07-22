<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .letterhead {
            text-align: center;
            margin-bottom: 30px;
        }
        .letterhead h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .letterhead h2 {
            margin: 0;
            font-size: 18px;
        }
        .letterhead p {
            margin: 0;
            font-size: 14px;
        }
        .letterhead .address {
            margin-top: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="letterhead">
        <h1>Nama Perusahaan</h1>
        <h2>Departemen</h2>
        <p>Jl. Nama Jalan No. 123, Kota, Negara</p>
        <p class="address">Telp: (021) 12345678 | Email: info@perusahaan.com</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Ranking</th>
                <th>Nama Pegawai</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item['rank'] }}</td>
                <td>{{ $item['alternatif'] }}</td>
                <td>{{ number_format($item['nilai_moora'], 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
