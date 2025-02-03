<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ["name" => "Metro Manila", "latitude" => 14.5995, "longitude" => 120.9842],
            ["name" => "Abra", "latitude" => 17.5693, "longitude" => 120.6193],
            ["name" => "Apayao", "latitude" => 18.1000, "longitude" => 121.0000],
            ["name" => "Benguet", "latitude" => 16.4012, "longitude" => 120.5971],
            ["name" => "Ifugao", "latitude" => 16.7425, "longitude" => 121.0561],
            ["name" => "Kalinga", "latitude" => 17.3406, "longitude" => 121.0185],
            ["name" => "Mountain Province", "latitude" => 17.1324, "longitude" => 120.5896],
            ["name" => "Ilocos Norte", "latitude" => 18.1787, "longitude" => 120.5930],
            ["name" => "Ilocos Sur", "latitude" => 17.0574, "longitude" => 120.4398],
            ["name" => "La Union", "latitude" => 15.7571, "longitude" => 120.3430],
            ["name" => "Pangasinan", "latitude" => 15.9945, "longitude" => 119.9469],
            ["name" => "Batanes", "latitude" => 20.4500, "longitude" => 121.9731],
            ["name" => "Cagayan", "latitude" => 17.6115, "longitude" => 121.7156],
            ["name" => "Isabela", "latitude" => 16.6142, "longitude" => 121.7463],
            ["name" => "Nueva Vizcaya", "latitude" => 16.3350, "longitude" => 121.1101],
            ["name" => "Quirino", "latitude" => 16.2090, "longitude" => 121.6111],
            ["name" => "Aurora", "latitude" => 15.5512, "longitude" => 121.6527],
            ["name" => "Bataan", "latitude" => 14.6372, "longitude" => 120.5579],
            ["name" => "Bulacan", "latitude" => 14.7970, "longitude" => 120.8152],
            ["name" => "Nueva Ecija", "latitude" => 15.4978, "longitude" => 120.9789],
            ["name" => "Pampanga", "latitude" => 15.0843, "longitude" => 120.6744],
            ["name" => "Tarlac", "latitude" => 15.4823, "longitude" => 120.5852],
            ["name" => "Zambales", "latitude" => 14.7577, "longitude" => 119.9517],
            ["name" => "Batangas", "latitude" => 13.7597, "longitude" => 121.0597],
            ["name" => "Cavite", "latitude" => 14.5087, "longitude" => 120.8838],
            ["name" => "Laguna", "latitude" => 14.1782, "longitude" => 121.3035],
            ["name" => "Quezon", "latitude" => 14.1221, "longitude" => 121.9397],
            ["name" => "Rizal", "latitude" => 14.5856, "longitude" => 121.1381],
            ["name" => "Marinduque", "latitude" => 13.4412, "longitude" => 121.9510],
            ["name" => "Occidental Mindoro", "latitude" => 12.7150, "longitude" => 120.7363],
            ["name" => "Oriental Mindoro", "latitude" => 13.0107, "longitude" => 121.1818],
            ["name" => "Palawan", "latitude" => 9.2875, "longitude" => 118.7404],
            ["name" => "Romblon", "latitude" => 12.5882, "longitude" => 122.2365],
            ["name" => "Albay", "latitude" => 13.2512, "longitude" => 123.7368],
            ["name" => "Camarines Norte", "latitude" => 14.0924, "longitude" => 122.9433],
            ["name" => "Camarines Sur", "latitude" => 13.6217, "longitude" => 123.2365],
            ["name" => "Catanduanes", "latitude" => 13.4215, "longitude" => 124.2393],
            ["name" => "Masbate", "latitude" => 12.3712, "longitude" => 123.6247],
            ["name" => "Sorsogon", "latitude" => 12.9712, "longitude" => 124.0143],
            ["name" => "Aklan", "latitude" => 11.7100, "longitude" => 122.3525],
            ["name" => "Antique", "latitude" => 11.4796, "longitude" => 122.0560],
            ["name" => "Capiz", "latitude" => 11.5800, "longitude" => 122.7744],
            ["name" => "Guimaras", "latitude" => 10.5766, "longitude" => 122.5860],
            ["name" => "Iloilo", "latitude" => 10.7202, "longitude" => 122.5621],
            ["name" => "Negros Occidental", "latitude" => 10.6400, "longitude" => 122.9405],
            ["name" => "Bohol", "latitude" => 9.7734, "longitude" => 124.2404],
            ["name" => "Cebu", "latitude" => 10.3119, "longitude" => 123.8854],
            ["name" => "Negros Oriental", "latitude" => 9.4793, "longitude" => 123.3091],
            ["name" => "Siquijor", "latitude" => 9.2149, "longitude" => 123.5314],
            ["name" => "Biliran", "latitude" => 11.5015, "longitude" => 124.4204],
            ["name" => "Eastern Samar", "latitude" => 11.0917, "longitude" => 125.4900],
            ["name" => "Leyte", "latitude" => 10.7304, "longitude" => 124.8250],
            ["name" => "Northern Samar", "latitude" => 12.0014, "longitude" => 124.5244],
            ["name" => "Samar", "latitude" => 12.0749, "longitude" => 124.8407],
            ["name" => "Southern Leyte", "latitude" => 10.1083, "longitude" => 125.0027],
            ["name" => "Zamboanga del Norte", "latitude" => 8.1384, "longitude" => 122.2642],
            ["name" => "Zamboanga del Sur", "latitude" => 7.7466, "longitude" => 123.5688],
            ["name" => "Zamboanga Sibugay", "latitude" => 7.5357, "longitude" => 122.4514],
            ["name" => "Bukidnon", "latitude" => 7.8117, "longitude" => 125.1243],
            ["name" => "Camiguin", "latitude" => 9.1602, "longitude" => 124.7316],
            ["name" => "Lanao del Norte", "latitude" => 8.0064, "longitude" => 124.4989],
            ["name" => "Misamis Occidental", "latitude" => 8.1744, "longitude" => 123.8522],
            ["name" => "Misamis Oriental", "latitude" => 8.1455, "longitude" => 124.5559],
            ["name" => "Compostela Valley", "latitude" => 7.9734, "longitude" => 126.1433],
            ["name" => "Davao del Norte", "latitude" => 7.7263, "longitude" => 125.7102],
            ["name" => "Davao del Sur", "latitude" => 6.8970, "longitude" => 125.3542],
            ["name" => "Davao Occidental", "latitude" => 6.6534, "longitude" => 125.3582],
            ["name" => "Davao Oriental", "latitude" => 6.9705, "longitude" => 126.2233],
            ["name" => "Cotabato", "latitude" => 7.1960, "longitude" => 124.7830],
            ["name" => "Sarangani", "latitude" => 6.1091, "longitude" => 125.1037],
            ["name" => "South Cotabato", "latitude" => 6.1275, "longitude" => 124.8517],
            ["name" => "Sultan Kudarat", "latitude" => 6.3687, "longitude" => 124.7466],
            ["name" => "Agusan del Norte", "latitude" => 9.1655, "longitude" => 125.5297],
            ["name" => "Agusan del Sur", "latitude" => 8.4564, "longitude" => 125.4831],
            ["name" => "Dinagat Islands", "latitude" => 10.1017, "longitude" => 125.6091],
            ["name" => "Surigao del Norte", "latitude" => 9.7825, "longitude" => 125.4963],
            ["name" => "Surigao del Sur", "latitude" => 9.2147, "longitude" => 125.9115],
            ["name" => "Basilan", "latitude" => 6.6790, "longitude" => 122.3952],
            ["name" => "Lanao del Sur", "latitude" => 7.9165, "longitude" => 124.2924],
            ["name" => "Maguindanao", "latitude" => 7.4771, "longitude" => 124.5393],
            ["name" => "Sulu", "latitude" => 5.9497, "longitude" => 121.0561],
            ["name" => "Tawi-tawi", "latitude" => 5.0480, "longitude" => 119.7461],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
