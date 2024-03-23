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
        Schema::table('users', function (Blueprint $table) {
            $table->date('birth_date')->nullable();
            $table->string('gender')->default('H');
            $table->string('licence_number')->nullable();
            $table->boolean('is_federal_pass_active')->default(false);
            $table->decimal('golf_index', 5, 2)->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->boolean('is_admin')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('birth_date');
            $table->dropColumn('gender');
            $table->dropColumn('licence_number');
            $table->dropColumn('is_federal_pass_active');
            $table->dropColumn('golf_index');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('zip_code');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('is_admin');
        });
    }
};
