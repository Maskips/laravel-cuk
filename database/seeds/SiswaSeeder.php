<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = [
            ['nama'=>'Raflisaputraa', 'nis'=>'00130103', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Kopo Sadang', 'tgl_lahir'=>'2003-01-13', 'umur'=>17],
            ['nama'=>'NamaPerempuan', 'nis'=>'00120202', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Kopo Sayati', 'tgl_lahir'=>'2003-01-12', 'umur'=>16],
            ['nama'=>'Saputraa', 'nis'=>'00110101', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Kopo', 'tgl_lahir'=>'2003-01-10', 'umur'=>15],
            ['nama'=>'NamaPerempuan1', 'nis'=>'00101000', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Sayati', 'tgl_lahir'=>'2003-01-09', 'umur'=>14],
            ['nama'=>'Kiplii', 'nis'=>'00091029', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Cigondewah', 'tgl_lahir'=>'2003-01-08', 'umur'=>13],
        ];

            // masukkan data ke database
            DB::table('post')->insert($post);
    }
}
