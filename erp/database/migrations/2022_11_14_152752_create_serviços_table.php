<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiçosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviços', function (Blueprint $table) {
            $table->id();
            $table->integer('os')->default_value('000000');
            $table->decimal('valor', 19, 2)->default_value('00000,00');
            $table->decimal('gastos', 19, 2)->default_value('00000,00');
            $table->string('funilaria', 30)->default('');
            $table->string('pintura', 30)->default('');
            $table->string('preparação', 30)->default('');
            $table->string('montagem', 30)->default('');
            $table->string('polimento', 30)->default('');
            $table->string('encerrada', 10)->default('não');
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
        Schema::dropIfExists('serviços');
    }
}
