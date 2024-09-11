<?php

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
        Schema::create('pics',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('pic_name');
            $table->timestamp('date_taken');

           });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
