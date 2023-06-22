<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'berkala', 'slug' =>'berkala'
            ],
            [
                'nama_kategori' => 'serta merta','slug' =>'serta-merta'
            ],
            [
                'nama_kategori' => 'setiap saat','slug' =>'setiap-saat'
            ],
            [
                'nama_kategori' => 'materi umum','slug' =>'materi-umum'
            ],
            [
                'nama_kategori' => 'laporan pengaduan','slug' =>'laporan-pengaduan'
            ],
            [
                'nama_kategori' => 'dikecualikan','slug' =>'dikecualikan'
            ],
            [
                'nama_kategori' => 'artikel','slug' =>'artikel'
            ],
            [
                'nama_kategori' => 'narasi tunggal','slug' =>'narasi-tunggal'
            ],
            [
                'nama_kategori' => 'galeri','slug' =>'galeri'
            ],
            [
                'nama_kategori' => 'infografis','slug' =>'infografis'
            ]
        ]);
    }
}
