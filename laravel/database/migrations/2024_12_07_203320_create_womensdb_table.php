<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('womensdb', function (Blueprint $table) {
            $table->id();

        //↓↓↓↓↓を追加
        $table->string('com_no')->nullable()->comment('法人番号');
        $table->string('a_salary')->comment('平均年収');
        $table->decimal('a_age')->nullable()->comment('平均年齢');
        $table->string('rev')->nullable()->comment('売上高');
        $table->string('op_prof_mar')->comment('営業利益率');
        $table->text('net_prof_mar')->nullable()->comment('当期純利益率');
        // ↑↑↑↑↑を追加

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('womensdb');
    }
};
