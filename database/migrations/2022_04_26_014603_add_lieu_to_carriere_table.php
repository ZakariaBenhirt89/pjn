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
        Schema::table('carriere', function (Blueprint $table) {
            $table->string('short_description_fr')->nullable();
            $table->string('short_description_ar')->nullable();
            $table->string('lieu_fr')->nullable();
            $table->string('lieu_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carriere', function (Blueprint $table) {
            //
        });
    }
};
