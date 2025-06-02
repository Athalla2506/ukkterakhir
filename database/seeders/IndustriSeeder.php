<?php

namespace Database\Seeders;

use App\Models\Industri;
use Illuminate\Database\Seeder;

class IndustriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
        $industriData = [
            [
                'nama' => 'PT Aksa Digital Group',
                'deskripsi' => 'IT Service and IT Consulting (Information Technology Company)',
                'alamat' => 'Jl. Wongso Permono No.26, Klidon, Sukoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581',
                'kontak' => '08982909000',
                'email' => 'aksa@gmail.com',
            ],
            [
                'nama' => 'PT. Gamatechno Indonesia',
                'deskripsi' => 'Penyedia layanan, solusi, dan produk inovasi teknologi informasi',
                'alamat' => 'Jl. Purwomartani, Karangmojo, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'kontak' => '0274-5044044',
                'email' => 'info@gamatechno.com',
            ],
            [
                'nama' => 'CV. Karya Hidup Sentosa',
                'deskripsi' => 'Alat pertanian',
                'alamat' => 'Jl. Magelang KM.8,8, Jongke Tengah, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285',
                'kontak' => '0274-512095',
                'email' => 'quick@gmail.com',
            ],
        ];
        foreach ($industriData as $data) {
            Industri::create($data);
        }
        $this->command->info('Data Industri berhasil diisi!');
        } catch (\Exception $e) {
            $this->command->error('Gagal mengisi data Industri: ' . $e->getMessage());
        }
    }
}
