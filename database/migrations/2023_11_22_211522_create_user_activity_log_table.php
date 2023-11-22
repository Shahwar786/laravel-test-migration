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
        Schema::create('user_activity_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('activity_type');
            $table->timestamp('activity_date');
            $table->text('description');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('user_activity_log');
    }
    
};
