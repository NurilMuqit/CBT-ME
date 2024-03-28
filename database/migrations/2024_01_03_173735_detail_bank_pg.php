<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailBankPg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bank_pg', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->longText('soal');
            $table->longText('pg_1');
            $table->longText('pg_2');
            $table->longText('pg_3');
            $table->longText('pg_4');
            $table->longText('pg_5');
            $table->longText('jawaban');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bank_pg');
    }
}
