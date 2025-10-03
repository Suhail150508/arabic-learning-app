<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            // Minimal placeholders; update assets later
            ['char' => 'ا','name' => 'Alif'],
            ['char' => 'ب','name' => 'Ba'],
            ['char' => 'ت','name' => 'Ta'],
            ['char' => 'ث','name' => 'Tha'],
            ['char' => 'ج','name' => 'Jeem'],
            ['char' => 'ح','name' => 'Haʼ'],
            ['char' => 'خ','name' => 'Khaʼ'],
            ['char' => 'د','name' => 'Dal'],
            ['char' => 'ذ','name' => 'Dhal'],
            ['char' => 'ر','name' => 'Ra'],
            ['char' => 'ز','name' => 'Zay'],
            ['char' => 'س','name' => 'Seen'],
            ['char' => 'ش','name' => 'Sheen'],
            ['char' => 'ص','name' => 'Sad'],
            ['char' => 'ض','name' => 'Dad'],
            ['char' => 'ط','name' => 'Tta'],
            ['char' => 'ظ','name' => 'Zza'],
            ['char' => 'ع','name' => 'Ayn'],
            ['char' => 'غ','name' => 'Ghayn'],
            ['char' => 'ف','name' => 'Fa'],
            ['char' => 'ق','name' => 'Qaf'],
            ['char' => 'ك','name' => 'Kaf'],
            ['char' => 'ل','name' => 'Lam'],
            ['char' => 'م','name' => 'Meem'],
            ['char' => 'ن','name' => 'Noon'],
            ['char' => 'ه','name' => 'Ha'],
            ['char' => 'و','name' => 'Waw'],
            ['char' => 'ي','name' => 'Ya'],
        ];

        foreach ($rows as $index => $row) {
            DB::table('letters')->insert([
                'char' => $row['char'],
                'name' => $row['name'],
                'makhraj_text' => null,
                'makhraj_images' => json_encode([]),
                'audio' => json_encode([
                    'plain' => null,
                    'fatha' => null,
                    'kasra' => null,
                    'damma' => null,
                ]),
                'examples' => json_encode([
                    'fatha' => ['word' => null, 'audio' => null],
                    'kasra' => ['word' => null, 'audio' => null],
                    'damma' => ['word' => null, 'audio' => null],
                ]),
                'sort_order' => $index + 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
