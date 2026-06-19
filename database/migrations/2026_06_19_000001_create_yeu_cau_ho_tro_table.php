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
        Schema::create('yeu_cau_ho_tro', function (Blueprint $table) {
            $table->id();
            $table->string('ten_khach_hang');
            $table->string('sdt_khach_hang', 20);
            $table->text('noi_dung_yeu_cau')->nullable();
            $table->string('trang_thai')->default('chưa hỗ trợ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yeu_cau_ho_tro');
    }
};
