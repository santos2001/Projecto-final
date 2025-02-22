<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->string('plafond');
            $table->string('code');
            $table->string('nif');
            $table->string('company');
            $table->string('phone');
            $table->string('email');
            $table->string('logo');
            $table->string('issued')->default('Não');
            $table->string('lineBusiness');
            $table->string('Website');
            $table->string('status')->default('RECEBIDO');
            $table->softDeletes();
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
        Schema::dropIfExists('companies');
    }
}
