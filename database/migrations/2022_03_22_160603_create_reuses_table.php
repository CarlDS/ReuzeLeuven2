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
        Schema::create('reuses', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('slug');
            $table->text('beschrijving')->nullable();
            $table->string('geboortejaar')->nullable();
            $table->string('type')->nullable();
            $table->string('lengte')->nullable();
            $table->string('gewicht')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('banner_image_id')->nullable();
            $table->unsignedBigInteger('grid_image_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reuses');
    }
};
