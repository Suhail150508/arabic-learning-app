<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('char', 4); // single Arabic character
            $table->string('name'); // Alif, Baa, etc.
            $table->text('makhraj_text')->nullable(); // Pronunciation description
            $table->json('makhraj_images')->nullable(); // Store multiple images as JSON array
            $table->json('audio')->nullable(); // {"plain":"path.mp3","fatha":"path.mp3"}
            $table->json('examples')->nullable(); // [{"word":"بسم","audio":"bism.mp3"}]
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });


         
        // Insert all 28 Arabic letters with makhraj text
        DB::table('letters')->insert([
            ['char' => 'ا', 'name' => 'Alif', 'makhraj_text' => 'From the empty space of the throat (middle part).', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 1],
            ['char' => 'ب', 'name' => 'Baa', 'makhraj_text' => 'Both lips closing together.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 2],
            ['char' => 'ت', 'name' => 'Taa', 'makhraj_text' => 'Tip of the tongue touching the base of the front two upper teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 3],
            ['char' => 'ث', 'name' => 'Thaa', 'makhraj_text' => 'Tip of the tongue touching the edges of the top two front teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 4],
            ['char' => 'ج', 'name' => 'Jeem', 'makhraj_text' => 'Middle of the tongue touching the roof of the mouth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 5],
            ['char' => 'ح', 'name' => 'Haa', 'makhraj_text' => 'From the middle of the throat.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 6],
            ['char' => 'خ', 'name' => 'Khaa', 'makhraj_text' => 'From the upper part of the throat.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 7],
            ['char' => 'د', 'name' => 'Daal', 'makhraj_text' => 'Tip of the tongue touching the base of the front two upper teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 8],
            ['char' => 'ذ', 'name' => 'Dhal', 'makhraj_text' => 'Tip of the tongue touching the edges of the top two front teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 9],
            ['char' => 'ر', 'name' => 'Raa', 'makhraj_text' => 'Tip of the tongue touching the gums of the upper front teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 10],
            ['char' => 'ز', 'name' => 'Zay', 'makhraj_text' => 'Tip of the tongue close to the roots of the upper front teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 11],
            ['char' => 'س', 'name' => 'Seen', 'makhraj_text' => 'Tip of the tongue close to the roots of the upper front teeth with whistle sound.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 12],
            ['char' => 'ش', 'name' => 'Sheen', 'makhraj_text' => 'Middle of the tongue touching the roof of the mouth with air flow.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 13],
            ['char' => 'ص', 'name' => 'Saad', 'makhraj_text' => 'Tip of the tongue close to the roots of the upper front teeth (heavier).', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 14],
            ['char' => 'ض', 'name' => 'Daad', 'makhraj_text' => 'Side of the tongue touching the upper molars.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 15],
            ['char' => 'ط', 'name' => 'Taa (Heavy)', 'makhraj_text' => 'Tip of the tongue touching the roots of the upper front teeth (heavy sound).', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 16],
            ['char' => 'ظ', 'name' => 'Zhaa', 'makhraj_text' => 'Tip of the tongue touching the edges of the upper front teeth (heavy sound).', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 17],
            ['char' => 'ع', 'name' => 'Ayn', 'makhraj_text' => 'From the middle of the throat.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 18],
            ['char' => 'غ', 'name' => 'Ghayn', 'makhraj_text' => 'From the upper part of the throat.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 19],
            ['char' => 'ف', 'name' => 'Faa', 'makhraj_text' => 'Inside of the bottom lip touching the edges of the upper front teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 20],
            ['char' => 'ق', 'name' => 'Qaaf', 'makhraj_text' => 'Back of the tongue touching the soft palate.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 21],
            ['char' => 'ك', 'name' => 'Kaaf', 'makhraj_text' => 'Back of the tongue touching the soft palate (lighter sound).', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 22],
            ['char' => 'ل', 'name' => 'Laam', 'makhraj_text' => 'Tip of the tongue touching the gums of the upper front teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 23],
            ['char' => 'م', 'name' => 'Meem', 'makhraj_text' => 'Lips closing together.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 24],
            ['char' => 'ن', 'name' => 'Noon', 'makhraj_text' => 'Tip of the tongue touching the gums of the upper front teeth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 25],
            ['char' => 'و', 'name' => 'Waw', 'makhraj_text' => 'Rounding of lips with air flow.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 26],
            ['char' => 'ه', 'name' => 'Haa (Light)', 'makhraj_text' => 'From the bottom of the throat.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 27],
            ['char' => 'ي', 'name' => 'Yaa', 'makhraj_text' => 'Middle of the tongue touching the roof of the mouth.', 'makhraj_images' => json_encode([]), 'audio' => json_encode(['plain'=>null,'fatha'=>null,'kasra'=>null,'damma'=>null]), 'examples' => json_encode([]), 'sort_order' => 28],
        ]);
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
