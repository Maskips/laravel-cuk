<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Tugas Tabungan</title>
</head>
<body>

    @foreach ($tabungan as $data)
        <?php
        $out = null;
            if ($data['jml'] >= 1000 && $data['jml'] <= 10000) {
                $out = 'Paket A';
            }
            else if ($data['jml'] >= 10000 && $data['jml'] <= 25000) {
                $out = 'Paket B';
            }
            if ($data['jml'] >= 25000 && $data['jml'] <= 50000) {
                $out = 'Paket C';
            }
            ?>

        Nama : {[$data->nama]}<br>
        Nis : {[$data->nis]}<br>
        Kelas : {[$data->kelas]}<br>
        Jumlah : {[$data->jml]}<br>
        Paket : <?php echo $out?>
        <hr>
    @endforeach
</body>
</html>
