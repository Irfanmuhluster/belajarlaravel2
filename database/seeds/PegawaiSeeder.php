<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$items = [
    		['nama_pegawai' => 'Joni',
        	'jabatan' => 'Web Designer',
        	'umur' => 25,
        	'alamat' => 'Jl. Panglateh'],
        	['nama_pegawai' => 'Retno',
        	'jabatan' => 'Web Designer',
        	'umur' => 22,
        	'alamat' => 'Kediri'],
        	['nama_pegawai' => 'Fajar',
        	'jabatan' => 'Programmer',
        	'umur' => 22,
        	'alamat' => 'Solo'],
        	['nama_pegawai' => 'Budi',
        	'jabatan' => 'Sysadmin',
        	'umur' => 31,
        	'alamat' => 'Yogyakarta'],
        	['nama_pegawai' => 'Ambar',
        	'jabatan' => 'System Analis',
        	'umur' => 29,
        	'alamat' => 'Jakarta'],
            ['nama_pegawai' => 'Ani',
            'jabatan' => 'CS',
            'umur' => 29,
            'alamat' => 'Jakarta'],
            ['nama_pegawai' => 'Wisnu',
            'jabatan' => 'Programmer',
            'umur' => 30,
            'alamat' => 'Jakarta'],
            ['nama_pegawai' => 'Nuke',
            'jabatan' => 'Programmer',
            'umur' => 30,
            'alamat' => 'Jakarta'],
            ['nama_pegawai' => 'Philips',
            'jabatan' => 'Sysadmin',
            'umur' => 30,
            'alamat' => 'Jakarta'],
            ['nama_pegawai' => 'Niko',
            'jabatan' => 'Programmer',
            'umur' => 30,
            'alamat' => 'Jakarta'],
            ['nama_pegawai' => 'Arya',
            'jabatan' => 'Programmer',
            'umur' => 30,
            'alamat' => 'Jakarta'],
        ];
        foreach ($items as $item) {
        	DB::table('pegawai')->insert($item);
    	}

    }
}
