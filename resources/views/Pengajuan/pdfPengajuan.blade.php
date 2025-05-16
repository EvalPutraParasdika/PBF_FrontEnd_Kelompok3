<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pengajuan Mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #28a745;
            color: white;
        }

        .table-wrapper {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Data Pengajuan Mahasiswa</h2>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Tgl Pengajuan</th>
                    <th>Semester Cuti</th>
                    <th>Tgl Mulai Cuti</th>
                    <th>Tgl Selesai Cuti</th>
                    <th>Alasan</th>
                    <th>Dokumen</th>
                    <th>Status Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuan as $pngj)
                    <tr>
                        <td>{{ $pngj['NIM'] }}</td>
                        <td>{{ $pngj['nama'] }}</td>
                        <td>{{ $pngj['kelas'] }}</td>
                        <td>{{ $pngj['semester'] }}</td>
                        <td>{{ $pngj['tgl_pengajuan'] }}</td>
                        <td>{{ $pngj['semester_cuti'] }}</td>
                        <td>{{ $pngj['tgl_mulai_cuti'] }}</td>
                        <td>{{ $pngj['tgl_selesai_cuti'] }}</td>
                        <td>{{ $pngj['alasan'] }}</td>
                        <td>{{ $pngj['dokumen'] }}</td>
                        <td>{{ $pngj['status_pengajuan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
