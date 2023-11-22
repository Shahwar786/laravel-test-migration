<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('stock_data', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('company_id');
        $table->timestamp('date');
        $table->decimal('open_price', 10, 2);
        $table->decimal('close_price', 10, 2);
        $table->decimal('high', 10, 2);
        $table->decimal('low', 10, 2);
        $table->bigInteger('volume');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('stock_data');
}

};
