<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($out as $data)
        Nama : {[$data->nama]} <br>
        Umur : {[$data->umur]} <br>
        Tanggal Lahir : {[$data->tgl_lahir]} <br>
        Negara : {[$data->negara]} <br>
        Klub : {[$data->klub]} <br>
        Tinggi Badan : {[$data->tb]} <br>
        Berat Badan : {[$data->bb]} <br>
        Posisi : {[$data->posisi]} <br>
    @endforeach
</body>
</html>
