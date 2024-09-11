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
       Schema::create('items',function (Blueprint $table){
        $table->bigIncrements('id');
        $table->string('item_name');
        $table->integer('price');

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
