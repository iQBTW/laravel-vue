<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div style="background-color:orange;" class="px-5 py-2">
        <h2>Daftar Nilai</h2>
    </div>

    <?php 
        $datas = file_get_contents('./json/data.json');
        $data = json_decode($datas, true);
    ?>

    <div class="px-5 py-5">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Tanggal Lahir
                    </th>
                    <th>
                        Umur
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        Kelas
                    </th>
                    <th>
                        Nilai
                    </th>
                    <th>
                        Hasil
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $no = 1;
                foreach ($data as $key => $value) {

                    // Menghitung umur
                    $tanggal_lahir = strtotime($value['tanggal_lahir']);
                    $tahun_lahir = date('Y', $tanggal_lahir);
                    $umur = date('Y') - $tahun_lahir;

                    // Pengecekan Hasil Nilai
                    $nilai = $value['nilai'];
                    $hasil_nilai = [];
                    if($nilai >= 80) {
                        $nilai = "A";
                    } elseif ($nilai >= 70 && $nilai <= 79) {
                        $nilai = "B";
                    } elseif ($nilai >= 60 && $nilai <= 69) {
                        $nilai = "C";
                    } elseif ($nilai >= 50 && $nilai <= 59) {
                        $nilai = "D";
                    } else {
                        $nilai = "E";
                    }
                    $hasil_nilai = $nilai;

            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['tanggal_lahir'] ?></td>
                        <td><?= $umur ?></td>
                        <td><?= $value['alamat'] ?></td>
                        <td><?= $value['kelas'] ?></td>
                        <td><?= $value['nilai'] ?></td>
                        <td><?= $hasil_nilai ?></td>
                    </tr>
            <?php
                    $no++;
                } 
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>