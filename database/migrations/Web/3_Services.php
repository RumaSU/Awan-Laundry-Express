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
        Schema::create('Service_Kilos', function (Blueprint $table) {
            $table->uuid('idKilos')->primary();
            $table->uuid('idStore');
            $table->unsignedDecimal('price', 20, 2);
            $table->boolean('active')->default(true);
            
            $table->foreign("idStore")->references("idStore")->on("Stores")->onDelete("cascade");
            $table->timestamps();
        });
        
        Schema::create('Service_Units', function (Blueprint $table) {
            $table->uuid('idUnit')->primary();
            $table->uuid('idStore');
            $table->string('unit_name');
            $table->unsignedDecimal('price', 20, 2);
            $table->boolean('active')->default(true);
            
            $table->foreign("idStore")->references("idStore")->on("Stores")->onDelete("cascade");
            $table->timestamps();
        });
        
        Schema::create('Service_Meters', function (Blueprint $table) {
            $table->uuid('idMeters')->primary();
            $table->uuid('idStore');
            $table->unsignedDecimal('price', 20, 2);
            $table->boolean('active')->default(true);
            
            $table->foreign("idStore")->references("idStore")->on("Stores")->onDelete("cascade");
            $table->timestamps();
        });
        
        Schema::create('Service_Shipping', function (Blueprint $table) {
            $table->uuid('idShipping')->primary();
            $table->uuid('idStore');
            $table->unsignedDecimal('price', 20, 2);
            $table->boolean('active')->default(true);
            
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
