<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->timestamps();
        });
        $categories = [
            ['name'=>'Mobili antichi', 'image'=>'img\categories_image\mobili_antichi.png'],
            ['name'=>'Schede telefoniche', 'image'=>'img\categories_image\schede_telefoniche.png'],
            ['name'=>'Music shop', 'image'=>'img\categories_image\music_shop.png'],
            ['name'=>'Vini', 'image'=>'img\categories_image\vini.png'],
            ['name'=>'Monete', 'image'=>'img\categories_image\monete.png'],
            ['name'=>'Orologi', 'image'=>'img\categories_image\orologi.png'],
            ['name'=>'Libri', 'image'=>'img\categories_image\libri.png'],
            ['name'=>'Giocattoli', 'image'=>'img\categories_image\giocattoli.png'],
            ['name'=>'Armi', 'image'=>'img\categories_image\armi.png'],
            ['name'=>'Altro', 'image'=>'img\categories_image\altro.png'],
                      ];
        
        foreach($categories as $category) {
            Category::create(['name'=>$category['name'],'image'=>$category['image']]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
