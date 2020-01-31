<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainBolaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama'=>'Raflisaputraa', 'umur'=>17, 'tgl_lahir'=>'2003-01-13', 'negara'=>'Indonesia', 'klub'=>'PPDB FC', 'tb'=>'169 cm', 'bb'=>'58 kg', 'posisi'=>'Kiper'],
            ['nama'=>'Kiplii', 'umur'=>16, 'tgl_lahir'=>'2004-12-09', 'negara'=>'Inggris', 'klub'=>'Man City', 'tb'=>'165 cm', 'bb'=>'60 kg', 'posisi'=>'Bek Tengah'],
            ['nama'=>'Bekam', 'umur'=>25, 'tgl_lahir'=>'1985-12-10', 'negara'=>'Inggris', 'klub'=>'Man Utd', 'tb'=>'167 cm', 'bb'=>'61 kg', 'posisi'=>'Gelandang Tengah'],
            ['nama'=>'Ronaldikin', 'umur'=>29, 'tgl_lahir'=>'1981-04-15', 'negara'=>'Brazil', 'klub'=>'Bakar Celana', 'tb'=>'168 cm', 'bb'=>'58 kg', 'posisi'=>'Penyerang'],
            ['nama'=>'Messi', 'umur'=>26, 'tgl_lahir'=>'1983-02-02', 'negara'=>'Argentina', 'klub'=>'Bakar Celana', 'tb'=>'155 cm', 'bb'=>'58 kg', 'posisi'=>'Sayap Kanan'],
        ];
        DB::table('pemain_bolas')->insert($data);

    }
}
