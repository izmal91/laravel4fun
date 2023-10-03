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
        Schema::create('staff', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 250)->nullable(true);
            $table->string('email', 200)->nullable(true);
            $table->string('mobile_no', 20)->nullable(true);
            $table->string('user_type', 10)->default('user');
            $table->string('created_from', 20)->default('portal');
            $table->dateTime('created_date');
            $table->dateTime('updated_date');
            $table->string('active', 1)->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
