<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\addHostel;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_hostels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('hostel_manager_name', 50);
            $table->string('phone', 13);
            $table->string('mobile_number', 13);
            $table->string('email')->unique();
            $table->enum('gender', ['Male', 'Female']);
            $table->integer('hostel_rent');
            $table->string('hostel_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_hostels');
    }
};
