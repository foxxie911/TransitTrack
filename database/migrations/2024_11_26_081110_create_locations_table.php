<?php

use App\Models\Company;
use App\Models\Location;
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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_name')->unique();
            $table->timestamps();
        });

        Schema::create('company_location', function(Blueprint $table){
            $table->id();
            $table->foreignIdFor(Company::class);
            $table->foreignIdFor(Location::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
        Schema::dropIfExists('company_location');
    }
};
