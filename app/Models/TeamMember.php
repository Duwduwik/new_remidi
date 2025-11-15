<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Kita tetap extend Model meskipun kita tidak menggunakan database untuk contoh statis ini
class TeamMember extends Model
{
    /**
     * Ambil semua anggota tim (sebagai simulasi query database).
     * @return array
     */
    public static function getAll()
    {
        return [
            [
                'nama' => 'Rizky Dewa Cahya Saputra',
                'nim' => '2301040014',
                // Pastikan path gambar ini benar di folder public/assets/images
                'foto_url' => 'publik/image/KIKI.jpg', 
                'deskripsi' => 'Programmer 1 Master Programmer alias bossnya. Bertanggung jawab atas semua fitur utama dan arsitektur kode.',
                'sosial_media' => ['facebook-f', 'twitter', 'instagram'],
            ],
            [
                'nama' => 'Duwik',
                'nim' => '2301040018',
                'foto_url' => 'publik/image/duwik.jpg', 
                'deskripsi' => 'Programmer 2 termuda Programmer 1. Spesialis dalam desain front-end dan responsive layout.',
                'sosial_media' => ['facebook-f', 'twitter', 'instagram'],
            ],
        ];
    }
}