<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TopicAndFormatEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $filePathTopic = database_path('seeders/data/topik_event.csv');
        $filePathFormat = database_path('seeders/data/format_event.csv');

        // Pastikan file ada
        if (!File::exists($filePathTopic)) {
            echo "File CSV tidak ditemukan: {$filePathTopic}\n";
            return;
        }

        if (!File::exists($filePathFormat)) {
            echo "File CSV tidak ditemukan: {$filePathFormat}\n";
            return;
        }

        // Baca file CSV
        $dataTopic = array_map('str_getcsv', file($filePathTopic));
        $dataFormat = array_map('str_getcsv', file($filePathFormat));

        // Hilangkan header jika ada
        $header = array_shift($dataTopic);
        $header = array_shift($dataFormat);

        // Masukkan data ke tabel
        foreach ($dataTopic as $row) {
            DB::table('event_topics')->insert([
                'name' => $row[0],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach ($dataFormat as $row) {
            DB::table('event_formats')->insert([
                'name' => $row[0],
                'images' => $row[1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        echo "Data berhasil dimasukkan dari file CSV.\n";
    }
}
