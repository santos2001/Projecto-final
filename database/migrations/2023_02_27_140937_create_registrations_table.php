<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            $table->string('code');
            $table->string('idCard')->nullable();
            $table->string('type');
            $table->string('name');
            $table->string('company');
            $table->string('function')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('level')->default('Normal');
            $table->string('quantity')->nullable();
            $table->string('printed_at')->nullable();
            $table->enum('status', ['PAGO', 'EMITIDO', 'RECEBIDO', 'DUPLICADO'])->default('RECEBIDO');
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
        Schema::dropIfExists('registrations');
    }
}
