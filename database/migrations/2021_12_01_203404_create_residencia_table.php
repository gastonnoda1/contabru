<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residencia', function (Blueprint $table) {
            $table->id();
            $table->string('calle',100);
            $table->timestamps();
        });
        Schema::table('residencia', function (Blueprint $table) {
            $table->unsignedBigInteger('personas_id')->unique()->nullable();
            $table->foreign('personas_id')->references('id')->on('personas')
            ->onUpdate('cascade')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residencia');
    }
}
