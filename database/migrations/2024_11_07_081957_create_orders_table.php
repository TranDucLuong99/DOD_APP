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
        // Tạo bảng orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->decimal('amount', 8, 2);
            $table->timestamp('created_at')->nullable();
        });

        // Thêm partitioning bằng cách sử dụng lệnh raw
        \Illuminate\Support\Facades\DB::statement('ALTER TABLE orders PARTITION BY RANGE (YEAR(created_at)) (
            PARTITION p2022 VALUES LESS THAN (2023),
            PARTITION p2023 VALUES LESS THAN (2024),
            PARTITION p2024 VALUES LESS THAN (2025)
        )');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
