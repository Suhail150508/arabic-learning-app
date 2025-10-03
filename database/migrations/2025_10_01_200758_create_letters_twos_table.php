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
        Schema::create('letters_twos', function (Blueprint $table) {
            $table->id();
            $table->string('char', 10);   // যেমন: أَ
            $table->string('name');       // যেমন: Alif Fatha (আ)
            $table->string('sound')->nullable();   // mp3 ফাইল path
            $table->string('example')->nullable(); // উদাহরণ শব্দ
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });


        DB::table('letters_twos')->insert([
            // Alif
            ['char' => 'أَ', 'name' => 'Alif Fatha (আ)', 'sound' => 'sounds/alif_fatha.mp3', 'example' => 'أب', 'sort_order' => 1],
            ['char' => 'إِ', 'name' => 'Alif Kasra (ই)', 'sound' => 'sounds/alif_kasra.mp3', 'example' => 'إبن', 'sort_order' => 2],
            ['char' => 'أُ', 'name' => 'Alif Damma (উ)', 'sound' => 'sounds/alif_damma.mp3', 'example' => 'أم', 'sort_order' => 3],

            // Baa
            ['char' => 'بَ', 'name' => 'Baa Fatha (বা)', 'sound' => 'sounds/baa_fatha.mp3', 'example' => 'بسم', 'sort_order' => 4],
            ['char' => 'بِ', 'name' => 'Baa Kasra (বি)', 'sound' => 'sounds/baa_kasra.mp3', 'example' => 'بشر', 'sort_order' => 5],
            ['char' => 'بُ', 'name' => 'Baa Damma (বু)', 'sound' => 'sounds/baa_damma.mp3', 'example' => 'بلد', 'sort_order' => 6],

            // Taa
            ['char' => 'تَ', 'name' => 'Taa Fatha (তা)', 'sound' => 'sounds/taa_fatha.mp3', 'example' => 'ترك', 'sort_order' => 7],
            ['char' => 'تِ', 'name' => 'Taa Kasra (তি)', 'sound' => 'sounds/taa_kasra.mp3', 'example' => 'تيم', 'sort_order' => 8],
            ['char' => 'تُ', 'name' => 'Taa Damma (তু)', 'sound' => 'sounds/taa_damma.mp3', 'example' => 'ترك', 'sort_order' => 9],

            // Thaa
            ['char' => 'ثَ', 'name' => 'Thaa Fatha (থা)', 'sound' => 'sounds/thaa_fatha.mp3', 'example' => 'ثمر', 'sort_order' => 10],
            ['char' => 'ثِ', 'name' => 'Thaa Kasra (থি)', 'sound' => 'sounds/thaa_kasra.mp3', 'example' => 'ثياب', 'sort_order' => 11],
            ['char' => 'ثُ', 'name' => 'Thaa Damma (থু)', 'sound' => 'sounds/thaa_damma.mp3', 'example' => 'ثوب', 'sort_order' => 12],

            // Jeem
            ['char' => 'جَ', 'name' => 'Jeem Fatha (জা)', 'sound' => 'sounds/jeem_fatha.mp3', 'example' => 'جمل', 'sort_order' => 13],
            ['char' => 'جِ', 'name' => 'Jeem Kasra (জি)', 'sound' => 'sounds/jeem_kasra.mp3', 'example' => 'جبل', 'sort_order' => 14],
            ['char' => 'جُ', 'name' => 'Jeem Damma (জু)', 'sound' => 'sounds/jeem_damma.mp3', 'example' => 'جمل', 'sort_order' => 15],

            // Haa (ح)
            ['char' => 'حَ', 'name' => 'Haa Fatha (হা)', 'sound' => 'sounds/haa_fatha.mp3', 'example' => 'حسن', 'sort_order' => 16],
            ['char' => 'حِ', 'name' => 'Haa Kasra (হি)', 'sound' => 'sounds/haa_kasra.mp3', 'example' => 'حبر', 'sort_order' => 17],
            ['char' => 'حُ', 'name' => 'Haa Damma (হু)', 'sound' => 'sounds/haa_damma.mp3', 'example' => 'حب', 'sort_order' => 18],

            // Khaa (خ)
            ['char' => 'خَ', 'name' => 'Khaa Fatha (খা)', 'sound' => 'sounds/khaa_fatha.mp3', 'example' => 'خالد', 'sort_order' => 19],
            ['char' => 'خِ', 'name' => 'Khaa Kasra (খি)', 'sound' => 'sounds/khaa_kasra.mp3', 'example' => 'خير', 'sort_order' => 20],
            ['char' => 'خُ', 'name' => 'Khaa Damma (খু)', 'sound' => 'sounds/khaa_damma.mp3', 'example' => 'خوف', 'sort_order' => 21],

            // Daal
            ['char' => 'دَ', 'name' => 'Daal Fatha (দা)', 'sound' => 'sounds/daal_fatha.mp3', 'example' => 'درس', 'sort_order' => 22],
            ['char' => 'دِ', 'name' => 'Daal Kasra (দি)', 'sound' => 'sounds/daal_kasra.mp3', 'example' => 'دنيا', 'sort_order' => 23],
            ['char' => 'دُ', 'name' => 'Daal Damma (দু)', 'sound' => 'sounds/daal_damma.mp3', 'example' => 'دور', 'sort_order' => 24],

            // Dhaal
            ['char' => 'ذَ', 'name' => 'Dhaal Fatha (যা)', 'sound' => 'sounds/dhaal_fatha.mp3', 'example' => 'ذهب', 'sort_order' => 25],
            ['char' => 'ذِ', 'name' => 'Dhaal Kasra (যি)', 'sound' => 'sounds/dhaal_kasra.mp3', 'example' => 'ذنب', 'sort_order' => 26],
            ['char' => 'ذُ', 'name' => 'Dhaal Damma (যু)', 'sound' => 'sounds/dhaal_damma.mp3', 'example' => 'ذو', 'sort_order' => 27],

            // Raa
            ['char' => 'رَ', 'name' => 'Raa Fatha (রা)', 'sound' => 'sounds/raa_fatha.mp3', 'example' => 'رسول', 'sort_order' => 28],
            ['char' => 'رِ', 'name' => 'Raa Kasra (রি)', 'sound' => 'sounds/raa_kasra.mp3', 'example' => 'رحيم', 'sort_order' => 29],
            ['char' => 'رُ', 'name' => 'Raa Damma (রু)', 'sound' => 'sounds/raa_damma.mp3', 'example' => 'رسول', 'sort_order' => 30],

            // Zay
            ['char' => 'زَ', 'name' => 'Zay Fatha (জা)', 'sound' => 'sounds/zay_fatha.mp3', 'example' => 'زمان', 'sort_order' => 31],
            ['char' => 'زِ', 'name' => 'Zay Kasra (জি)', 'sound' => 'sounds/zay_kasra.mp3', 'example' => 'زيت', 'sort_order' => 32],
            ['char' => 'زُ', 'name' => 'Zay Damma (জু)', 'sound' => 'sounds/zay_damma.mp3', 'example' => 'زور', 'sort_order' => 33],

            // Seen
            ['char' => 'سَ', 'name' => 'Seen Fatha (সা)', 'sound' => 'sounds/seen_fatha.mp3', 'example' => 'سلم', 'sort_order' => 34],
            ['char' => 'سِ', 'name' => 'Seen Kasra (সি)', 'sound' => 'sounds/seen_kasra.mp3', 'example' => 'سيم', 'sort_order' => 35],
            ['char' => 'سُ', 'name' => 'Seen Damma (সু)', 'sound' => 'sounds/seen_damma.mp3', 'example' => 'سوق', 'sort_order' => 36],

            // Sheen
            ['char' => 'شَ', 'name' => 'Sheen Fatha (শা)', 'sound' => 'sounds/sheen_fatha.mp3', 'example' => 'شمس', 'sort_order' => 37],
            ['char' => 'شِ', 'name' => 'Sheen Kasra (শি)', 'sound' => 'sounds/sheen_kasra.mp3', 'example' => 'شيء', 'sort_order' => 38],
            ['char' => 'شُ', 'name' => 'Sheen Damma (শু)', 'sound' => 'sounds/sheen_damma.mp3', 'example' => 'شور', 'sort_order' => 39],

            // Saad
            ['char' => 'صَ', 'name' => 'Saad Fatha (সা)', 'sound' => 'sounds/saad_fatha.mp3', 'example' => 'صبر', 'sort_order' => 40],
            ['char' => 'صِ', 'name' => 'Saad Kasra (সি)', 'sound' => 'sounds/saad_kasra.mp3', 'example' => 'صيد', 'sort_order' => 41],
            ['char' => 'صُ', 'name' => 'Saad Damma (সু)', 'sound' => 'sounds/saad_damma.mp3', 'example' => 'صوت', 'sort_order' => 42],

            // Daad
            ['char' => 'ضَ', 'name' => 'Daad Fatha (দা)', 'sound' => 'sounds/daad_fatha.mp3', 'example' => 'ضوء', 'sort_order' => 43],
            ['char' => 'ضِ', 'name' => 'Daad Kasra (দি)', 'sound' => 'sounds/daad_kasra.mp3', 'example' => 'ضيف', 'sort_order' => 44],
            ['char' => 'ضُ', 'name' => 'Daad Damma (দু)', 'sound' => 'sounds/daad_damma.mp3', 'example' => 'ضرب', 'sort_order' => 45],

            // Taa (Heavy)
            ['char' => 'طَ', 'name' => 'Taa Fatha (তা)', 'sound' => 'sounds/taa_heavy_fatha.mp3', 'example' => 'طريق', 'sort_order' => 46],
            ['char' => 'طِ', 'name' => 'Taa Kasra (তি)', 'sound' => 'sounds/taa_heavy_kasra.mp3', 'example' => 'طين', 'sort_order' => 47],
            ['char' => 'طُ', 'name' => 'Taa Damma (তু)', 'sound' => 'sounds/taa_heavy_damma.mp3', 'example' => 'طول', 'sort_order' => 48],

            // Zaa
            ['char' => 'ظَ', 'name' => 'Zaa Fatha (জা)', 'sound' => 'sounds/zaa_fatha.mp3', 'example' => 'ظفر', 'sort_order' => 49],
            ['char' => 'ظِ', 'name' => 'Zaa Kasra (জি)', 'sound' => 'sounds/zaa_kasra.mp3', 'example' => 'ظلم', 'sort_order' => 50],
            ['char' => 'ظُ', 'name' => 'Zaa Damma (জু)', 'sound' => 'sounds/zaa_damma.mp3', 'example' => 'ظاهر', 'sort_order' => 51],

            // Ayn
            ['char' => 'عَ', 'name' => 'Ayn Fatha (আ)', 'sound' => 'sounds/ayn_fatha.mp3', 'example' => 'علم', 'sort_order' => 52],
            ['char' => 'عِ', 'name' => 'Ayn Kasra (ই)', 'sound' => 'sounds/ayn_kasra.mp3', 'example' => 'عين', 'sort_order' => 53],
            ['char' => 'عُ', 'name' => 'Ayn Damma (উ)', 'sound' => 'sounds/ayn_damma.mp3', 'example' => 'عود', 'sort_order' => 54],

            // Ghayn
            ['char' => 'غَ', 'name' => 'Ghayn Fatha (আ)', 'sound' => 'sounds/ghayn_fatha.mp3', 'example' => 'غريب', 'sort_order' => 55],
            ['char' => 'غِ', 'name' => 'Ghayn Kasra (ই)', 'sound' => 'sounds/ghayn_kasra.mp3', 'example' => 'غيث', 'sort_order' => 56],
            ['char' => 'غُ', 'name' => 'Ghayn Damma (উ)', 'sound' => 'sounds/ghayn_damma.mp3', 'example' => 'غروب', 'sort_order' => 57],

            // Faa
            ['char' => 'فَ', 'name' => 'Faa Fatha (ফা)', 'sound' => 'sounds/faa_fatha.mp3', 'example' => 'فكر', 'sort_order' => 58],
            ['char' => 'فِ', 'name' => 'Faa Kasra (ফি)', 'sound' => 'sounds/faa_kasra.mp3', 'example' => 'فيل', 'sort_order' => 59],
            ['char' => 'فُ', 'name' => 'Faa Damma (ফু)', 'sound' => 'sounds/faa_damma.mp3', 'example' => 'فوز', 'sort_order' => 60],

            // Qaaf
            ['char' => 'قَ', 'name' => 'Qaaf Fatha (কা)', 'sound' => 'sounds/qaaf_fatha.mp3', 'example' => 'قلم', 'sort_order' => 61],
            ['char' => 'قِ', 'name' => 'Qaaf Kasra (কি)', 'sound' => 'sounds/qaaf_kasra.mp3', 'example' => 'قيس', 'sort_order' => 62],
            ['char' => 'قُ', 'name' => 'Qaaf Damma (কু)', 'sound' => 'sounds/qaaf_damma.mp3', 'example' => 'قوم', 'sort_order' => 63],

            // Kaaf
            ['char' => 'كَ', 'name' => 'Kaaf Fatha (কা)', 'sound' => 'sounds/kaaf_fatha.mp3', 'example' => 'كتاب', 'sort_order' => 64],
            ['char' => 'كِ', 'name' => 'Kaaf Kasra (কি)', 'sound' => 'sounds/kaaf_kasra.mp3', 'example' => 'كيف', 'sort_order' => 65],
            ['char' => 'كُ', 'name' => 'Kaaf Damma (কু)', 'sound' => 'sounds/kaaf_damma.mp3', 'example' => 'كود', 'sort_order' => 66],

            // Laam
            ['char' => 'لَ', 'name' => 'Laam Fatha (লা)', 'sound' => 'sounds/laam_fatha.mp3', 'example' => 'لسان', 'sort_order' => 67],
            ['char' => 'لِ', 'name' => 'Laam Kasra (লি)', 'sound' => 'sounds/laam_kasra.mp3', 'example' => 'ليل', 'sort_order' => 68],
            ['char' => 'لُ', 'name' => 'Laam Damma (লু)', 'sound' => 'sounds/laam_damma.mp3', 'example' => 'لوم', 'sort_order' => 69],

            // Meem
            ['char' => 'مَ', 'name' => 'Meem Fatha (মা)', 'sound' => 'sounds/meem_fatha.mp3', 'example' => 'مكتب', 'sort_order' => 70],
            ['char' => 'مِ', 'name' => 'Meem Kasra (মি)', 'sound' => 'sounds/meem_kasra.mp3', 'example' => 'ميت', 'sort_order' => 71],
            ['char' => 'مُ', 'name' => 'Meem Damma (মু)', 'sound' => 'sounds/meem_damma.mp3', 'example' => 'موسيقى', 'sort_order' => 72],

            // Noon
            ['char' => 'نَ', 'name' => 'Noon Fatha (না)', 'sound' => 'sounds/noon_fatha.mp3', 'example' => 'نور', 'sort_order' => 73],
            ['char' => 'نِ', 'name' => 'Noon Kasra (নি)', 'sound' => 'sounds/noon_kasra.mp3', 'example' => 'نمر', 'sort_order' => 74],
            ['char' => 'نُ', 'name' => 'Noon Damma (নু)', 'sound' => 'sounds/noon_damma.mp3', 'example' => 'نوم', 'sort_order' => 75],

            // Waw
            ['char' => 'وَ', 'name' => 'Waw Fatha (ওয়া)', 'sound' => 'sounds/waw_fatha.mp3', 'example' => 'ورق', 'sort_order' => 76],
            ['char' => 'وِ', 'name' => 'Waw Kasra (ওই)', 'sound' => 'sounds/waw_kasra.mp3', 'example' => 'وين', 'sort_order' => 77],
            ['char' => 'وُ', 'name' => 'Waw Damma (ওউ)', 'sound' => 'sounds/waw_damma.mp3', 'example' => 'وجود', 'sort_order' => 78],

            // Haa (هـ)
            ['char' => 'هَ', 'name' => 'Haa Fatha (হা)', 'sound' => 'sounds/haa2_fatha.mp3', 'example' => 'هدف', 'sort_order' => 79],
            ['char' => 'هِ', 'name' => 'Haa Kasra (হি)', 'sound' => 'sounds/haa2_kasra.mp3', 'example' => 'هلال', 'sort_order' => 80],
            ['char' => 'هُ', 'name' => 'Haa Damma (হু)', 'sound' => 'sounds/haa2_damma.mp3', 'example' => 'هجوم', 'sort_order' => 81],

            // Yaa
            ['char' => 'يَ', 'name' => 'Yaa Fatha (য়া)', 'sound' => 'sounds/yaa_fatha.mp3', 'example' => 'يسار', 'sort_order' => 82],
            ['char' => 'يِ', 'name' => 'Yaa Kasra (ই)', 'sound' => 'sounds/yaa_kasra.mp3', 'example' => 'يمين', 'sort_order' => 83],
            ['char' => 'يُ', 'name' => 'Yaa Damma (উ)', 'sound' => 'sounds/yaa_damma.mp3', 'example' => 'يوم', 'sort_order' => 84],

        ]);



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters_twos');
    }
};
