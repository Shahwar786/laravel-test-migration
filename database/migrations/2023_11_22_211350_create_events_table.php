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
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('event_name');
        $table->timestamp('event_date');
        $table->text('description');
        $table->string('location');
        $table->unsignedBigInteger('company_id')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('events');
}

};
