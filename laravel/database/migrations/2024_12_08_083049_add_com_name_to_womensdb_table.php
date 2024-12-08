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
        Schema::table('womensdb', function (Blueprint $table) {
            $table->string('com_name')->nullable()->comment('会社名'); // 新しいカラムを追加
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('womensdb', function (Blueprint $table) {
            $table->dropColumn('com_name'); // カラムを削除
        });
    }
};

