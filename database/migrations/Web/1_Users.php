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
        Schema::create('Users', function (Blueprint $table) {
            $table->uuid('idUser')->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('remain_email_change')->default(3);
            $table->timestamps();
        });
        
        Schema::create(('User_Detail'), function(Blueprint $table) {
            $table->uuid('idUser');
            $table->foreign("idUser")->references("idUser")->on("Users")->onDelete("cascade");
            $table->string('name');
            $table->string('telp');
            $table->enum('gender', ['Male', 'Female', 'Prefer not to say'])->default('Prefer not to say');
            $table->date('birth_date')->nullable();
            $table->integer('remain_name_change')->default(3);
        });
        
        Schema::create(('User_Address'), function(Blueprint $table) {
            $table->uuid('idAddress')->primary();
            $table->uuid('idUser');
            $table->foreign("idUser")->references("idUser")->on("Users")->onDelete("cascade");
            $table->string('labelAddress');
            $table->string('receiver');
            $table->string('receiver_telp');
            $table->string('ad_street');
            $table->string('ad_vill')->nullable();
            $table->string('ad_subdistrc')->nullable();
            $table->string('ad_distrc')->nullable();
            $table->string('ad_city');
            $table->string('ad_coordinates')->nullable();
            $table->boolean('selected')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newusers');
    }
};
