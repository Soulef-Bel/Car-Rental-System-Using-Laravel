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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');            
            $table->string('birthDate');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('ProfilePic')->nullable();
            $table->string('type'); /*type= admin,user,manager*/
            $table->string('status');
            /*  License Inf */
            $table->string('IDLicense')->nullable()->unique();
            $table->string('IDLicenseDate')->nullable();
            $table->string('IDLicenseExpiry')->nullable();
            $table->string('LicenseDoc')->nullable();
            
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
