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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('degree');
            $table->string('institution');
            $table->string('field_of_study')->nullable();
            $table->string('start_date', 7);    // format: YYYY-MM
            $table->string('end_date', 7)->nullable();  // format: YYYY-MM
            $table->string('grade');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Soft delete column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
