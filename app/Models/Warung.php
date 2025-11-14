<?php

namespace App\Models;

class Warung
{
    public static function data()
    {
        return [
            [
                'id' => 1,
                'title' => 'Mie Ayam Mas Nok',
                'subtitle' => 'Autentik Mie Ayam India',
                'deskripsi' => 'Mie ayam rasa Bollywood! Ayamnya berkarakter, kuahnya penuh rempah, dan tiap suapan bikin pengen nari. Pedasnya sopan, nikmatnya kelewatan. "Mie ayam yang bikin kamu nyanyi lagu India di parkiran!"',
                'images' => '1.jpeg',
            ],
            [
                'id' => 2,
                'title' => 'Bebek Galing',
                'subtitle' => 'Rasa Bebek Kok',
                'deskripsi' => 'Bebek yang digoreng garing, tapi hatinya tetap lembut—kayak kamu pas lihat story dia. Dibalur bumbu rahasia yang pedasnya nyentil, gurihnya ngajak ngobrol, dan kriuknya bikin tetangga kepo.',
                'images' => '2.jpeg',
            ],
            [
                'id' => 3,
                'title' => 'Nasi Ayam Taliwang',
                'subtitle' => 'Pedes Mantep Bro',
                'deskripsi' => 'Ayam bakar khas Lombok yang galak tapi sayang. Disiram sambal Taliwang yang pedasnya kayak mantan yang belum move on—nempel terus di hati dan lidah. Disajikan dengan nasi hangat, plecing yang cerewet, dan kerupuk yang sok penting.',
                'images' => '3.jpeg',
            ],
            [
                'id' => 4,
                'title' => 'Nasi Goreng Suka Duka',
                'subtitle' => 'Tiap Suapan Berasa Berduka',
                'deskripsi' => 'Nasi goreng yang paham perasaan. Kadang pedas, kadang manis—kayak hubungan yang nggak jelas. Ada telur buat harapan, ayam buat kenangan, dan kerupuk buat pelengkap luka.',
                'images' => '4.jpeg',
            ],
            [
                'id' => 5,
                'title' => 'Nasi Goreng Suka Duka',
                'subtitle' => 'Tiap Suapan Berasa Berduka',
                'deskripsi' => 'Nasi goreng yang paham perasaan. Kadang pedas, kadang manis—kayak hubungan yang nggak jelas. Ada telur buat harapan, ayam buat kenangan, dan kerupuk buat pelengkap luka.',
                'images' => '2.jpeg',
            ],
            [
                'id' => 6,
                'title' => 'Nasi Goreng Suka Duka',
                'subtitle' => 'Tiap Suapan Berasa Berduka',
                'deskripsi' => 'Nasi goreng yang paham perasaan. Kadang pedas, kadang manis—kayak hubungan yang nggak jelas. Ada telur buat harapan, ayam buat kenangan, dan kerupuk buat pelengkap luka.',
                'images' => '3.jpeg',
            ],
            [
                'id' => 7,
                'title' => 'Nasi Goreng Suka Duka',
                'subtitle' => 'Tiap Suapan Berasa Berduka',
                'deskripsi' => 'Nasi goreng yang paham perasaan. Kadang pedas, kadang manis—kayak hubungan yang nggak jelas. Ada telur buat harapan, ayam buat kenangan, dan kerupuk buat pelengkap luka.',
                'images' => '2.jpeg',
            ],
            [
                'id' => 8,
                'title' => 'Nasi Goreng Suka Duka',
                'subtitle' => 'Tiap Suapan Berasa Berduka',
                'deskripsi' => 'Nasi goreng yang paham perasaan. Kadang pedas, kadang manis—kayak hubungan yang nggak jelas. Ada telur buat harapan, ayam buat kenangan, dan kerupuk buat pelengkap luka.',
                'images' => '3.jpeg',
            ],
        ];
    }

    public static function caridata($id)
    {
        $posts = self::data();

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }

        return null;
    }

    public static function count()
    {
        return count(self::data());
    }
}
