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
                'nama' => 'Master Programmer',
                'nim' => '2301040001',
                // Pastikan path gambar ini benar di folder public/assets/images
                'foto_url' => 'publik/image/KIKI.jpg', 
                'deskripsi' => 'Programmer 1 Master Programmer alias bossnya. Bertanggung jawab atas semua fitur utama dan arsitektur kode.',
                'sosial_media' => ['facebook-f', 'twitter', 'instagram'],
            ],
            [
                'nama' => 'Termuda Programmer',
                'nim' => '2301040002',
                'foto_url' => 'publik/image/duwik.jpg', 
                'deskripsi' => 'Programmer 2 termuda Programmer 1. Spesialis dalam desain front-end dan responsive layout.',
                'sosial_media' => ['facebook-f', 'twitter', 'instagram'],
            ],
        ];
    }
}