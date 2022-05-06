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
        Schema::create('carriere', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_fr');
            $table->string('title_ar');
            $table->text('content_fr')->nullable();
            $table->text('content_ar')->nullable();
            $table->string('photo')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('email')->nullable();
            $table->string('tele')->nullable();
            $table->string('attachement')->nullable();

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
        Schema::dropIfExists('carriere');
    }
};
