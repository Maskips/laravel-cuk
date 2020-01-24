<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TugasLaravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kipli = [
            ['nama'=>'Raflisaputraa', 'sekolah'=>'SMK Assalaam', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Kopo Sadang', 'tgl_lahir'=>'2003-01-13', 'umur'=>17, 'hobi'=>'Futsal'],
            ['nama'=>'Adelia', 'sekolah'=>'SMPN 3 Margahayu', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Kopo Sayati', 'tgl_lahir'=>'2005-07-10', 'umur'=>15, 'hobi'=>'Mamasakan'],
            ['nama'=>'Kiplii', 'sekolah'=>'SMK Assalaam', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Cigondewah', 'tgl_lahir'=>'2003-01-26', 'umur'=>17, 'hobi'=>'Futsal'],
            ['nama'=>'Saputraa', 'sekolah'=>'SMA Assalaam', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Kopo', 'tgl_lahir'=>'2004-06-19', 'umur'=>16, 'hobi'=>'Main Game'],
            ['nama'=>'Nama Ciwiw', 'sekolah'=>'SMA Assalaam', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Sukamenak', 'tgl_lahir'=>'2003-02-05', 'umur'=>17, 'hobi'=>'Selfie'],
            ['nama'=>'Nama A', 'sekolah'=>'SMK Assalaam', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Cedok', 'tgl_lahir'=>'2003-08-17', 'umur'=>17, 'hobi'=>'Rahasia'],
            ['nama'=>'Nama B', 'sekolah'=>'SMA Assalaam', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Manglid', 'tgl_lahir'=>'2003-09-01', 'umur'=>17, 'hobi'=>'Mancing'],
            ['nama'=>'Nama C', 'sekolah'=>'SMK Assalaam', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Marken', 'tgl_lahir'=>'2003-06-22', 'umur'=>17, 'hobi'=>'Make-up an'],
            ['nama'=>'Nama D', 'sekolah'=>'SMK Assalaam', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Tki 2', 'tgl_lahir'=>'2003-11-23', 'umur'=>17, 'hobi'=>'Tari Tradisional'],
            ['nama'=>'Nama E', 'sekolah'=>'SMP Assalaam', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Kopo', 'tgl_lahir'=>'2005-02-27', 'umur'=>15, 'hobi'=>'Baca Buku']
        ];

        DB::table('tabel_tugas')->insert($kipli);
    }
}
