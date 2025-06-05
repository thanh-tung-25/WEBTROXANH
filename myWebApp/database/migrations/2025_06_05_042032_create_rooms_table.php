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
        // Tạo bảng rooms
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->unique(); // Số phòng
            $table->integer('floor')->nullable(); // Tầng
            $table->integer('capacity')->default(1); // Sức chứa
            $table->decimal('price', 10, 2); // Giá phòng
            $table->timestamps();
        });

        // Tạo bảng landlords
        Schema::create('landlords', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

        // Tạo bảng tenants
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('room_id'); // Khóa ngoại liên kết phòng
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Xoá bảng tenants trước vì có foreign key
        Schema::dropIfExists('tenants');

        // Xoá bảng landlords
        Schema::dropIfExists('landlords');

        // Xoá bảng rooms
        Schema::dropIfExists('rooms');
    }
};
