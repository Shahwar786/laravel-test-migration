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
    Schema::create('financial_statements', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('company_id');
        $table->string('document_type');
        $table->timestamp('period_ending_date');
        $table->string('file_path');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('financial_statements');
}

};
