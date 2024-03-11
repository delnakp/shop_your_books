<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
        
        DB::table('product_categories')->insert(
             [
                [
                    'name' => 'Fiction',
                    'created_at' => now()
                ],

                [
                    'name' => 'Medicine',
                    'created_at' => now()
                ],

                [
                    'name' => 'Art & Photography',
                    'created_at' => now()
                ],

                [
                    'name' => 'Biography & Memories',
                    'created_at' => now()
                ],

                [
                    'name' => 'Children & Teens',
                    'created_at' => now()
                ]
             ]
        );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
};
