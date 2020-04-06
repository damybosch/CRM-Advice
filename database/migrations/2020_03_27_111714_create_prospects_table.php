<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_by')->default(1);
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->text('note')->nullable(); // For use of users/sales people not the prospect
            $table->text('prospect_message')->nullable(); // for prospects use when fillen out the form.
            $table->boolean('isClient')->default(false);
            $table->boolean('isClaimable')->default(true);
            $table->integer('assigned')->default(1);
            $table->dateTime('date_assigned')->nullable();
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
        Schema::dropIfExists('prospects');
    }
}
