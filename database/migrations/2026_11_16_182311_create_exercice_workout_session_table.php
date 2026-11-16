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
        Schema::create('exercice_workout_session', function (Blueprint $table) {
            $table->ForeignId('exercice_id')->constrained('exercices','id')->onDelete('cascade');
            $table->ForeignId('workout_session_id')->constrained('workout_sessions','id')->onDelete('cascade');
            $table->integer('sets');
            $table->integer('reps');
            $table->decimal('weight', 10, 2)->nullable();
            $table->primary(['exercice_id', 'workout_session_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercice_workout_session');
    }
};
