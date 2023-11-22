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
            Schema::create('companies', function (Blueprint $table) {
                $table->id();
                $table->string('symbol');
                $table->string('company_name');
                $table->string('sector');
                $table->string('industry');
                $table->text('profile');
                $table->string('website_url');
                $table->string('phone_number');
                $table->string('email');
                $table->string('address');
                $table->string('city');
                $table->string('state');
                $table->string('postal_code');
                $table->string('country');
                $table->decimal('capitalization', 10, 2);
                $table->bigInteger('outstanding_shares');
                $table->bigInteger('reserved_shares');
                $table->timestamp('market_listing_date');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('companies');
        }

};
