<?php

use App\Models\RoomType;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('roomtype_id');
            $table->foreign('roomtype_id')->references('id')->on('room_types')->onDelete('cascade')->onUpdate('cascade');//            $table->unsignedBigInteger('roomtype_id')->change();
//            $table->foreign('roomtype_id')->references('id')->on('room_types')->onDelete('cascade')->onUpdate('cascade');
            $table->string('total_adult')->nullable();
            $table->string('total_child')->nullable();
            $table->string('room_capacity')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('size')->nullable();
            $table->string('view')->nullable();
            $table->string('bed_style')->nullable();
            $table->integer('discount')->default(0);
            $table->text('short_desc')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
