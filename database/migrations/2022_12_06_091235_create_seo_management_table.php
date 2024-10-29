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
        Schema::create('seo_management', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('meta')->nullable();
            $table->json('keywords')->nullable();
            // $table->foreignId('page_id');
            // $table->foreign('page_id')->references('id')->on('template_management')->onDelete('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_management');
    }
};
