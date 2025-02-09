<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('email_organizer', function (Blueprint $table) {
            $table->uuid('uuid')->after('id')->unique();
        });

        // Generate UUIDs for existing records
        DB::table('email_organizer')
            ->orderBy('id')
            ->whereNull('uuid')
            ->each(function ($record) {
                DB::table('email_organizer')
                    ->where('id', $record->id)
                    ->update(['uuid' => Str::uuid()]);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('email_organizer', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });
    }
};
