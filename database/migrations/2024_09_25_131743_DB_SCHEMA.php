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
        //
        Schema::create('registers',function(Blueprint $table){
            $table->increments('register_id');  // Assuming auto-incrementing primary key
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->dateTime('birthdate');
            $table->string('nationality', 50);
            $table->string('country', 50);
            $table->string('state', 80);
            $table->integer('zip_code');
            $table->string('gender', 20);
            $table->string('user_type', 10);
            $table->string('email', 80)->unique(); // Assuming emails should be unique
            $table->timestamps();
            $table->string('password',255); 
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
