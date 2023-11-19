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


        Schema::create('packages', function (Blueprint $table) {


        $table->id();
        $table->string('plan_name');
        $table->string('price');
        $table->string('features');
        $table->string('package_duration');
        $table->longText('Description');
                $table->integer('status');

        $table->bigInteger('currency_id')->unsigned();
        $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
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
        Schema::dropIfExists('packages');
    }
};
