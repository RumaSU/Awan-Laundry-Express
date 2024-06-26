<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRememberToken extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('newusers', function (Blueprint $table) {
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('newusers', function (Blueprint $table) {
            $table->dropRememberToken();
        });
    }
};
