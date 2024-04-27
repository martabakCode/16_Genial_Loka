<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationAnimalImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Zona Afrika',
                'description' => 'Zona afrika memberikan pengalaman interaktif dengan hewan yang menghuni dataran savana afrika.',
                'weight' => 7,
                'status' => 'buka',
                'operational_time' => 'Sabtu - Minggu, 08.00-11.00',
            ],
            [
                'name' => 'Aves',
                'description' => 'Ini adalah zona hewan aves atau hewan burung subfilum Vertebrata yang bagian tubuhnya tertutup bulu. Dalam zona ini terdapat berbagai jenis burung baik itu langka, terancam punah maupun jenis burung yang cukup terjaga angkanya di alam liar.',
                'weight' => 6,
                'status' => 'buka',
                'operational_time' => 'Sabtu - Minggu, 08.00-11.00',
            ],
            [
                'name' => 'Reptil',
                'description' => 'Zona reptil adalah zona yang menampilkan berbagai jenis reptil yang ada di dunia. Reptil adalah hewan vertebrata yang memiliki kulit bersisik dan bertelur. Reptil terdiri dari berbagai jenis, mulai dari ular, kura-kura, buaya, dan lain-lain.',
                'weight' => 8,
                'status' => 'buka',
                'operational_time' => 'Sabtu - Minggu, 08.00-11.00',
            ],
            [
                'name' => 'Mamalia',
                'description' => 'Zona mamalia adalah zona yang menampilkan berbagai jenis mamalia yang ada di dunia. Mamalia adalah hewan vertebrata yang memiliki kelenjar susu dan memiliki rambut. Mamalia terdiri dari berbagai jenis, mulai dari hewan darat, laut, dan udara.',
                'weight' => 9,
                'status' => 'tutup',
                'operational_time' => 'Sabtu - Minggu, 08.00-11.00',
            ],
        ];
        DB::table('locations')->insert($locations);

        $animals = [
            [
                'location_id' => 1,
                'name' => 'Jimmy',
                'species' => 'Jerapah',
                'latin_name' => 'Giraffa camelopardalis',
                'description' => 'Jerapah adalah mamalia berkuku besar Afrika yang termasuk dalam genus Giraffa. Ini adalah hewan darat tertinggi yang masih hidup dan pemamah biak terbesar di Bumi. ',
                'food' => 'Rumput',
                'reproduction' => 'jantan',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2024-04-17',
                'weight' => 500,
                'is_feedable' => 1
            ],
            [
                'location_id' => 1,
                'name' => 'Marv',
                'species' => 'Gajah',
                'latin_name' => 'Elephas maximus',
                'description' => 'Gajah, liman, atau biram adalah mamalia besar dari famili Elephantidae dan ordo Proboscidea. Secara tradisional, terdapat dua spesies yang diakui, yaitu gajah afrika dan gajah asia.',
                'food' => 'Rumput',
                'reproduction' => 'jantan',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2024-04-17',
                'weight' => 500,
                'is_feedable' => 1
            ],
            [
                'location_id' => 2,
                'name' => 'Tuwir',
                'species' => 'Kakaatua',
                'latin_name' => 'Cacatua',
                'description' => 'Kakatua adalah burung yang berasal dari Australia, Papua Nugini, dan Indonesia. Kakatua memiliki bulu yang berwarna cerah dan memiliki paruh yang besar.',
                'food' => 'Biji-bijian',
                'reproduction' => 'betina',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2018-04-17',
                'weight' => 2,
                'is_feedable' => 1
            ],
            [
                'location_id' => 2,
                'name' => 'John',
                'species' => 'Gagak',
                'latin_name' => 'Corvus',
                'description' => 'Gagak adalah anggota burung pengicau (Passeriformes) yang termasuk dalam genus Corvus, suku Corvidae. Di antara jenis-jenis unggas, gagak diketahui mempunyai tingkat kecerdasan tertinggi di antara para burung.[1] Kualitas ini sudah sejak lama diketahui manusia, khususnya dalam keterampilannya mencuri berbagai alat bantu manusia.',
                'food' => 'Biji-bijian, serangga',
                'reproduction' => 'jantan',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2018-04-17',
                'weight' => 3,
                'is_feedable' => 1
            ],
            [
                'location_id' => 3,
                'name' => 'Irene',
                'species' => 'Ular Sanca',
                'latin_name' => 'Python reticulatus',
                'description' => 'Ular sanca adalah ular yang berasal dari Asia Tenggara. Ular ini merupakan ular terpanjang di dunia dan dapat mencapai panjang hingga 10 meter.',
                'food' => 'Mamalia kecil',
                'reproduction' => 'betina',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2018-04-17',
                'weight' => 5,
                'is_feedable' => 1
            ],
            [
                'location_id' => 3,
                'name' => 'Koko',
                'species' => 'Buaya',
                'latin_name' => 'Crocodylus',
                'description' => 'Buaya adalah hewan reptil yang hidup di air tawar. Buaya memiliki ciri khas berupa moncong yang panjang dan gigi yang tajam.',
                'food' => 'Mamalia kecil',
                'reproduction' => 'jantan',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2018-04-17',
                'weight' => 5,
                'is_feedable' => 1
            ],
            [
                'location_id' => 4,
                'name' => 'Kiki',
                'species' => 'Harimau Sumatera',
                'latin_name' => 'Panthera tigris sumatrae',
                'description' => 'Harimau sumatera adalah subspesies harimau yang hanya ditemukan di pulau Sumatera, Indonesia. Harimau ini memiliki ukuran yang lebih kecil dibandingkan dengan harimau benggala.',
                'food' => 'Daging',
                'reproduction' => 'betina',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2018-04-02'
            ],
            [
                'location_id' => 4,
                'name' => 'Koko',
                'species' => 'Orangutan',
                'latin_name' => 'Pongo',
                'description' => 'Orangutan adalah hewan primata yang hidup di hutan hujan Indonesia. Orangutan merupakan satwa endemik Indonesia yang terancam punah.',
                'food' => 'Buah-buahan',
                'reproduction' => 'jantan',
                'feeding_time' => 'Senin & Jumat, 10.00 - 13.00',
                'date_of_birth' => '2018-04-02'
            ],
        ];
        DB::table('animals')->insert($animals);
    }
}
