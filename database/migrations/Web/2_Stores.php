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
        Schema::create('Stores', function (Blueprint $table) {
            $table->uuid('idStore')->primary();
            $table->text('photo')->nullable()->default('default.png');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
        
        Schema::create('Store_Permitt', function (Blueprint $table) {
            $table->uuid('idUser');
            $table->uuid('idStore');
            $table->enum('permitt_access', ['Owner', 'Admin', 'Staff'])->default('Staff');
            $table->boolean('active')->default(true);
            
            $table->foreign("idStore")->references("idStore")->on("Stores")->onDelete("cascade");
            $table->foreign("idUser")->references("idUser")->on("Users")->onDelete("cascade");
            $table->timestamps();
        });
        
        Schema::create(('Store_Address'), function(Blueprint $table) {
            $table->uuid('idAddress')->primary();
            $table->uuid('idStore');
            $table->string('ad_street');
            $table->string('ad_vill')->nullable();
            $table->string('ad_subdistrc')->nullable();
            $table->string('ad_distrc')->nullable();
            $table->string('ad_city');
            $table->string('ad_codepos')->nullable();
            
            $table->foreign("idStore")->references("idStore")->on("Stores")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
